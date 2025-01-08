<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\Jtm;
use app\models\JkpLatihan;
use app\models\JkpPentadbiran;
use app\models\BahagianLetakKereta;
use app\models\CawanganKerteh;
use app\models\JabatanKejuruteraan;
use app\models\JabatanKesihatanAlamSekitar;
use app\models\JabatanLandskap;
use app\models\JabatanPelesenan;
use app\models\JabatanPenilaian;
use app\models\JabatanUndang2;
use app\models\JkasKesihatanAwam;
use app\models\JkpSumberManusia;
use app\models\KorporatPentadbiran;
use app\models\PenilaianPengurusanHarta;
use app\models\PenilaianPentadbiran;
use app\models\PerbendaharaanKewangan;
use app\models\PerbendaharaanPerolehan;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $totalCount = Jtm::find()->count(); 

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']); // Redirect guests to login
        }
    
        return $this->render('index', [
            'totalCount' => $totalCount,
        ]); // Render homepage for logged-in users
    }
    

   /**
 * Login action.
 *
 * @return Response|string
 */
public function actionLogin()
{
    $this->layout = 'minimal';
    if (!Yii::$app->user->isGuest) {
        return $this->redirectUserBasedOnRole(); // Redirect logged-in users based on role
    }

    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
        return $this->redirectUserBasedOnRole(); // Redirect after successful login
    }

    $model->password = '';
    return $this->render('login', [
        'model' => $model,
    ]);
}

/**
 * Redirects users to their respective pages based on their role.
 *
 * @return Response
 */
protected function redirectUserBasedOnRole()
{
    $role = Yii::$app->user->identity->role; // Assuming `role` is a field in your `user` table

    if ($role === 'jtm') {
        return $this->redirect(['jtm/index']);
    } elseif ($role === 'blk') {
        return $this->redirect(['bahagian-letak-kereta/index']);
    } elseif ($role === 'cawangan kerteh') {
        return $this->redirect(['cawangan-kerteh/index']);
    } elseif ($role === 'kejuruteraan') {
        return $this->redirect(['jabatan-kejuruteraan/index']);
    } elseif ($role === 'jkas') {
        return $this->redirect(['jabatan-kesihatan-alam-sekitar/index']);
    } elseif ($role === 'landskap') {
        return $this->redirect(['jabatan-landskap/index']);
    } elseif ($role === 'pelesenan') {
        return $this->redirect(['jabatan-pelesenan/index']);
    } elseif ($role === 'penilaian') {
        return $this->redirect(['jabatan-penilaian/index']);
    } elseif ($role === 'undang2') {
        return $this->redirect(['jabatan-undang2/index']);
    } elseif ($role === 'jkas(kesihatan awam)') {
        return $this->redirect(['sjkas-kesihatan-awam/index']);
    } elseif ($role === 'jkp(latihan)') {
        return $this->redirect(['jkp-latihan/index']);
    } elseif ($role === 'jkp(pentadbiran)') {
        return $this->redirect(['jkp-pentadbiran/index']);
    } elseif ($role === 'jkp(sumber manusia)') {
        return $this->redirect(['jkp-sumber-manusia/index']);
    } elseif ($role === 'korporat') {
        return $this->redirect(['korporat-pentadbiran/index']);
    } elseif ($role === 'jpph') {
        return $this->redirect(['penilaian-pengurusan-harta/index']);
    } elseif ($role === 'penilaian pentadbiran') {
        return $this->redirect(['penilaian-pentadbiran/index']);
    } elseif ($role === 'perbendaharaan(kewangan)') {
        return $this->redirect(['perbendaharaan-kewangan/index']);
    } elseif ($role === 'perbendaharaan(perolehan)') {
        return $this->redirect(['perbendaharaan-perolehan/index']);
    } elseif ($role === 'admin') {
        return $this->redirect(['site/dashboard']);
    } 
}


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

        /**
     * Displays about page.
     *
     * @return string
     */
    public function actionSignup()
    {
        $this->layout = 'minimal';
        $model = new SignupForm();
    
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->signup()) {
            // Set a flash message for the login page
            Yii::$app->session->setFlash('success', 'Thank you for registration.');
    
            // Redirect to the login page
            return $this->redirect(['site/login']);
        }
    
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
    
    public function actionDashboard()
    {
        // Fetch totals from multiple tables
        $table1Count = Jtm::find()->count(); // Replace Table1 with your actual model name
        $table2Count = JkpLatihan::find()->count();
        $table3Count = JkpPentadbiran::find()->count();
        $table4Count = BahagianLetakKereta::find()->count(); 
        $table5Count = CawanganKerteh::find()->count(); 
        $table6Count = JabatanKejuruteraan::find()->count(); 
        $table7Count = JabatanKesihatanAlamSekitar::find()->count(); 
        $table8Count = JabatanLandskap::find()->count(); 
        $table9Count = JabatanPelesenan::find()->count(); 
        $table10Count = JabatanPenilaian::find()->count(); 
        $table11Count = JabatanUndang2::find()->count(); 
        $table12Count = JkasKesihatanAwam::find()->count();
        $table13Count = JkpSumberManusia::find()->count(); 
        $table14Count = KorporatPentadbiran::find()->count(); 
        $table15Count = PenilaianPengurusanHarta::find()->count();   // Replace Table2 with your actual model name
        $table16Count = PenilaianPentadbiran::find()->count(); 
        $table17Count = PerbendaharaanKewangan::find()->count(); 
        $table18Count = PerbendaharaanPerolehan::find()->count(); 

        // Aggregate data
        $chartData = [
            ['label' => 'JTM', 'total' => $table1Count],
            ['label' => 'JKP Latihan', 'total' => $table2Count],
            ['label' => 'JKP Pentadbiran', 'total' => $table3Count],
            ['label' => 'Bahagian Letak Kereta', 'total' => $table4Count],
            ['label' => 'Cawangan Kerteh', 'total' => $table5Count],
            ['label' => 'Jabatan Kejuruteraan', 'total' => $table6Count],
            ['label' => 'JKAS', 'total' => $table7Count],
            ['label' => 'Jabatan Landskap', 'total' => $table8Count],
            ['label' => 'Jabatan Pelesenan', 'total' => $table9Count],
            ['label' => 'Jabatan Penilaian', 'total' => $table10Count],
            ['label' => 'Jabatan Undang-Undang', 'total' => $table11Count],
            ['label' => 'JKAS Kesihatan Awam', 'total' => $table12Count],
            ['label' => 'JKP Sumber Manusia', 'total' => $table13Count],
            ['label' => 'Korporat Pentadbiran', 'total' => $table14Count],
            ['label' => 'JPPH', 'total' => $table15Count],
            ['label' => 'JPPH Pentadbiran', 'total' => $table16Count],
            ['label' => 'Perbendaharaan Kewangan', 'total' => $table17Count],
            ['label' => 'Perbendaharaan Perolehan', 'total' => $table18Count],
        ];

        $totalCount = $table1Count + $table2Count + $table3Count+ $table4Count+ $table5Count+ $table6Count+ $table7Count+ $table8Count+ $table9Count+ $table10Count+ $table11Count+ $table12Count+ $table13Count+ $table14Count+ $table15Count+ $table16Count+ $table17Count+ $table18Count;


        // Pass data to the view
        return $this->render('dashboard', [
            'chartData' => $chartData,
            'totalCount' => $totalCount, // Include the total count
        ]);
    }
    
}
