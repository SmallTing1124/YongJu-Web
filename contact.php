<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>聯絡我們｜永琚建設機構</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="css/UnitPage.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="bannerBox" style="background-image: url(./images/banner/contact-bg.png);">
        <h2 class="UnitTitle text-center">
            <span>Contact Us</span>
        </h2>
    </div>
    <section class="UnitPage contactArea mt-5">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h3 class="subtitle">
                        <b>聯絡我們</b>
                        <small>建築不是硬體，它是你的另一個身體</small>
                    </h3>
                    <form id="form1" name="form1" method="post" action="admins/contactemailgo.php">
                        <div class="form-group row">
                            <div class="col-4 p-0">
                                <label class="col-form-label ">聯絡姓名</label>
                            </div>
                            <div class="col-8 p-0">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 p-0">
                                <label class="col-form-label ">聯絡電話</label>
                            </div>
                            <div class="col-8 p-0">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 p-0">
                                <label class="col-form-label ">電子郵件</label>
                            </div>
                            <div class="col-8 p-0">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 p-0">
                                <label class="col-form-label ">聯絡主旨</label>
                            </div>
                            <div class="col-8 p-0">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 p-0">
                                <label class="col-form-label ">留言訊息</label>
                            </div>
                            <div class="col-8 p-0">
                                <textarea type="text" cols="100" rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 p-0">
                                <input type="submit" value="送出" class="btn btn-dark btn-block">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p>
                        如有任何問題或疑慮，請隨時與我們聯繫。<br>
                        確認您的詢問後，我們將與負責人聯繫。
                    </p>
                    <hr>
                    <ul class="ContactInfo">
                        <li><b>服務時間</b>週一至週五<br>上午 8:00~12:00 <br>下午 13:30~17:30</li>
                        <li><b>聯絡電話</b>0800-888-888</li>
                        <li><b>傳真電話</b>0800-888-888</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
    <script>
        $(".haeder-nav  .menuList .nav-item:nth-child(6)").addClass("active");
    </script>
</body>

</html>