<?php $thisPage = $_SERVER['REQUEST_URI'];
$dasboard = "";
if ($thisPage == "/admincatalog/Admin") {
    $dasboard = "active";
}
// if ($thisPage == "/admincatalog/UserAdm") {
//     $dasboard = "active";
// }

// if ($thisPage == "/admincatalog/PlatingColour") {
//     $dasboard = "active";
// }

$MasterList = "";
$aktifMasterList = "";
$aktifSampletype = "";
$aktifCategory = "";
$aktifMaterialtype = "";
$aktifSellmethod = "";

$MaterPlating = "";
$aktifMasterPlating = "";
$aktiPlatingColour = "";
$aktiPlatingMetal = "";

$UserAdm = "";
$aktifUserAdm = "";
$aktifManageuser = "";

if ($thisPage == "/admincatalog/Sampletype") {
    $MasterList = 'class="hidden-ul" style="display: block;"';
    $aktifMasterList = 'active';
    $aktifSampletype = 'active';
}

if ($thisPage == "/admincatalog/Category") {
    $MasterList = 'class="hidden-ul" style="display: block;"';
    $aktifMasterList = 'active';
    $aktifCategory = "active";
}

if ($thisPage == "/admincatalog/Materialtype") {
    $MasterList = 'class="hidden-ul" style="display: block;"';
    $aktifMasterList = 'active';
    $aktifMaterialtype = "active";
}

if ($thisPage == "/admincatalog/Sellmethod") {
    $MasterList = 'class="hidden-ul" style="display: block;"';
    $aktifMasterList = 'active';
    $aktifSellmethod = "active";
}


if ($thisPage == "/admincatalog/UserAdm") {
    $UserAdm = 'class="hidden-ul" style="display: block;"';
    $aktifUserAdm = 'active';
    $aktifManageuser = "active";
}

if ($thisPage == "/admincatalog/PlatingColour") {
    $PlatingColour = 'class="hidden-ul" style="display: block;"';
    $aktifPlatingColour = 'active';
    $PltColour = "active";
}

?>
<div class="page-content">
    <div class="sidebar sidebar-main">
        <div class="sidebar-content">
            <div class="sidebar-user">
                <div class="category-content">
                    <div class="media">
                        <a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                        <div class="media-body">
                            <span class="media-heading text-semibold"><?= $this->session->userdata('nama_user') ?></span>
                        </div>

                        <div class="media-right media-middle">
                            <ul class="icons-list">
                                <li>
                                    <a href="#"><i class="icon-cog3"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-category sidebar-category-visible">
                <div class="category-content no-padding">
                    <ul class="navigation navigation-main navigation-accordion">
                        <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                        <li class="<?= $dasboard ?>"><a href="<?= base_url('Admin') ?>"><i class="icon-home4"></i>
                                <span>Dashboard</span></a></li>

                        <li class="<?= $aktifMasterList ?>">
                            <a href="#"><i class="icon-folder"></i> <span>Master List</span></a>
                            <ul <?= $MasterList ?>>
                                <li class="<?= $aktifSampletype ?>"><a href="<?= base_url('Sampletype') ?>">Sample Type</a></li>
                                <li class="<?= $aktifCategory ?>"><a href="<?= base_url('Category') ?>">Sample Category</a></li>
                                <li class="<?= $aktifMaterialtype ?>"><a href="<?= base_url('Materialtype') ?>">Material Type</a></li>
                                <li class="<?= $aktifSellmethod ?>"><a href="<?= base_url('Sellmethod') ?>">Sell Method </a></li>
                                <li class="navigation-divider"></li>
                                <li><a href="boxed_default.html">Update Item</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="icon-folder"></i> <span>Master Plating</span></a>
                            <ul>
                                <li><a href="<?= base_url('PlatingColour') ?>">Plating Colour </a></li>
                                <li><a href="<?= base_url('PlatingMetal') ?>">Plating Metal </a></li>
                                <li><a href="<?= base_url('PlatingMethod') ?>">Plating Method </a></li>
                                <li class="navigation-divider"></li>
                                <li><a href="<?= base_url('Plating') ?>">Plating</a></li>
                            </ul>
                        </li>

                        <li>
                            <!-- icon-stack2 -->
                            <a href="#"><i class="icon-folder"></i><span>Metal List</span></a>
                            <ul>
                                <li><a href="#">Metal Colour Type</a></li>
                                <li><a href="#">Nickel Content</a></li>
                            </ul>
                        </li>

                        <li class="<?= $aktifUserAdm ?>">
                            <a href="#"><i class="icon-stack2"></i><span>User Data</span></a>
                            <ul <?= $UserAdm ?>>
                                <li class="<?= $aktifManageuser ?>"><a href="<?= base_url('UserAdm') ?>">Manage User</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>