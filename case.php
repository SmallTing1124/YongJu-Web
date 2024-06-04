<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>熱銷個案｜永琚建設機構</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="css/UnitPage.css">
    <link rel="stylesheet" href="css/case.css">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="bannerBox" style="background-image: url(./images/banner/case-bg.png);">
        <h2 class="UnitTitle text-center">
            <span>Hot Case</span>
        </h2>
    </div>
    <section class="UnitPage caseArea">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-2 CategoryBox">
                    <div class="title">
                        <small>Category</small>
                    </div>
                    <ul class="CategoryList">
                        <li><a href="case.php" class="active">熱銷線上</a></li>
                        <li><a href="work.php">經典個案</a></li>
                    </ul>
                </div>
                <div class="col-lg-9 caseBox">
                    <h3 class="subtitle">
                        <b>熱銷線上</b>
                        <small>獨特之選，精彩生活從這裡開始</small>
                    </h3>
                    <div class="caseList row">
                        <!-- item -->
                        <a class="item col-lg-4" href="case-in.php">
                            <div class="Img">
                                <div class="innerImg">
                                    <div class="image" style="background-image: url(./images/case/case-deom-1.jpg);">
                                    </div>
                                </div>
                            </div>
                            <div class="Txt">
                                <small>臺北市信義區</small>
                                <h5 class="caseName">建案名稱</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
    <script>
    $(".haeder-nav  .menuList .nav-item:nth-child(2)").addClass("active");
    </script>
</body>

</html>