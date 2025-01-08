<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
$this->registerCssFile('@web/css/bootstrap.css', [
    'depends' => ['yii\web\YiiAsset'],
]);
$this->registerCssFile('@web/css/sidebar.css', [
    'depends' => ['yii\web\YiiAsset'],
]);
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<div class="d-flex">
    <!-- Sidebar -->
    <nav id="sidebar" class="bg-dark text-white">
        <div class="sidebar-header text-center py-4">
            <?= Html::img('@web/images/logo.png', [
                'alt' => Yii::$app->name,
                'class' => 'img-fluid mb-2',
                'style' => 'max-height: 60px;'
            ]) ?>
            <h5><?= Html::encode(Yii::$app->name) ?></h5>
        </div>
        <ul class="list-unstyled components">
            <li>
                <?= Html::a('Dashboard', ['/dashboard'], ['class' => 'nav-link text-white']) ?>
            </li>
            <li>
                <?= Html::a('Home', ['/site/dashboard'], ['class' => 'nav-link text-white']) ?>
            </li>
            <li>
                <?= Html::a('About', ['/site/about'], ['class' => 'nav-link text-white']) ?>
            </li>
            <li>
                <?= Html::a('User', ['/user/index'], ['class' => 'nav-link text-white']) ?>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-link text-white" data-bs-toggle="collapse" data-bs-target="#jabatanSubmenu" aria-expanded="false">
                    Jabatan
                </a>
                <ul class="collapse list-unstyled ps-3" id="jabatanSubmenu">
                    <li><?= Html::a('Bahagian Letak Kereta', ['/bahagian-letak-kereta/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Cawangan Kerteh', ['/cawangan-kerteh/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Jabatan Kejuruteraan', ['/jabatan-kejuruteraan/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('JKAS', ['/jabatan-kesihatan-alam-sekitar/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Jabatan Landskap', ['/jabatan-landskap/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Jabatan Pelesenan', ['/jabatan-pelesenan/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Jabatan Penilaian', ['/jabatan-penilaian/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Jabatan Undang-Undang', ['/jabatan-undang2/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('JKAS (Kesihatan Awam)', ['/jkas-kesihatan-awam/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('JKP (Latihan)', ['/jkp-latihan/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('JKP (Pentadbiran)', ['/jkp-pentadbiran/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('JKP (Sumber Manusia)', ['/jkp-sumber-manusia/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('JTM', ['/jtm/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Jabatan Korporat (Pentadbiran)', ['/korporat-pentadbiran/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Penilaian Pengurusan Harta', ['/penilaian-pengurusan-harta/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Penilaian Pentadbiran', ['/penilaian-pentadbiran/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Perbendaharaan (Kewangan)', ['/perbendahraan-kewangan/index'], ['class' => 'nav-link text-white']) ?></li>
                    <li><?= Html::a('Perbendahraan (Perolehan)', ['/perbendaharaan-perolehan/index'], ['class' => 'nav-link text-white']) ?></li>
                </ul>
            </li>
            <li>
                <?= Yii::$app->user->isGuest
                    ? Html::a('Login', ['/site/login'], ['class' => 'nav-link text-white'])
                    : Html::beginForm(['/site/logout'], 'post') .
                      Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-danger w-100']) .
                      Html::endForm()
                ?>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div id="content" class="p-4 w-100">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
