<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $role;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username','email'], 'trim'],
            [['username','email','password'], 'required'],

            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 5, 'max' => 255],


            ['email', 'email'],
            ['email', 'string', 'min' => 5, 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],


            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['role', 'in', 'range' => ['blk','admin', 'cawangan kerteh', 'kejuruteraan', 'jkas', 'landskap', 'pelesenan', 'penilaian', 'undang2', 'jkas(kesihatan Awam)',
             'jkp(latihan)', 'jkp(pentadbiran)', 'jkp(sumber manusia)', 'jtm', 'korporat', 'jpph', 'penilaian pentadbiran', 'perbendaharaan(kewangan)', 'perbendaharaan(perolehan)']], 
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->role = $this->role; // Assign the selected role
        $user->generateEmailVerificationToken();

        return $user->save();
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}