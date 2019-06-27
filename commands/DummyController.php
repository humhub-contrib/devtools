<?php

namespace humhub\modules\devtools\commands;

use Yii;
use humhub\modules\user\models\User;
use humhub\modules\file\libs\FileHelper;
use humhub\modules\user\models\Group;
use humhub\modules\user\models\Password;
use yii\base\Exception;
use yii\httpclient\Client;
use yii\httpclient\Response;


/**
 * Console tools for creating dummy content, users or spaces
 */
class DummyController extends \yii\console\Controller
{

    /**
     * Create users with data from https://randomuser.me
     *
     * @param int $count
     * @throws \Throwable
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\db\StaleObjectException
     */
    public function actionCreateUsers($count = 3)
    {
        $client = new Client();

        /** @var Response $response */
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl('https://randomuser.me/api/')
            ->setData(['results' => $count])
            ->send();

        if (!$response->isOk) {
            print "got error";
            print_r($response->getContent());
            return;
        }

        $groups = Group::findAll(['show_at_registration' => 1]);

        foreach ($response->data['results'] as $res) {

            $user = new User();
            $user->username = $res['login']['username'];
            $user->email = $res['login']['username'] . '@example.com';
            $user->status = User::STATUS_ENABLED;

            if (!$user->save()) {
                print_r($user->getErrors());
                return;
            } else {
                $user->profile->firstname = ucfirst($res['name']['first']);
                $user->profile->lastname = ucfirst($res['name']['last']);
                $user->profile->city = ucfirst($res['location']['city']);
                $user->profile->zip = ucfirst($res['location']['postcode']);
                $user->profile->phone_work = ucfirst($res['phone']);
                $user->profile->mobile = ucfirst($res['cell']);

                if (!$user->profile->save()) {
                    print_r($user->profile->getErrors());
                    $user->delete();
                    return;
                }
            }

            // Set Password
            $password = new Password();
            $password->setPassword($user->username);
            $password->user_id = $user->id;
            if (!$password->save()) {
                print_r($password->getErrors());
                return;
            }

            $filePath = $this->downloadProfileImage($res['picture']['large']);
            $user->getProfileImage()->setNew($filePath);

            $rand = rand(0, count($groups) - 1);

            /** @var Group $group */
            $group = $groups[$rand];
            if ($group !== null) {
                $group->addUser($user);
            }

            print "\t" . $user->displayName . "\n";

        }


        print "Generated " . $count . " Users\n";
    }

    protected function downloadProfileImage($url)
    {
        $sex = 'm';
        if (strpos($url, 'women/') !== false) {
            $sex = 'f';
        }
        $cacheName = $sex . basename($url);

        $dir = Yii::getAlias('@runtime/randomdata/user');
        try {
            FileHelper::createDirectory($dir);
        } catch (Exception $e) {
            die();
        }

        $file = $dir . '/' . $cacheName;

        if (!file_exists($file)) {
            $client = new Client();

            /** @var Response $response */
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl($url)
                ->setFormat(Client::FORMAT_RAW_URLENCODED)
                ->send();

            file_put_contents($file, $response->content);
        }

        return $file;
    }

}
