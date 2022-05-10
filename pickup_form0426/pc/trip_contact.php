<?php
$error = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST,$_POST);
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['address'] === '') {
        $error['address'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    }
    if ($post['tel'] === '') {
        $error['tel'] = 'blank';
    }
    if ($post['date'] === '') {
        $error['date'] = 'blank';
    }
    if ($post['contact'] === '') {
        $error['contact'] = 'blank';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>#</title>
  <meta name="keywords" content="ピックアップ,PickUP,pickup,リサイクルショップ,リユースショップ,リサイクル,買取,中古,不用品,静岡,浜松,掛川,磐田,藤枝,トレファクグループ">
  <meta name="description" content="#">
  <meta name="robots" content="index,follow,noydir,noodp">
  <meta name="viewport" content="width=1200">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="https://www.pickup-japan.com/favicon.ico">
  <link rel="icon" href="https://www.pickup-japan.com/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="https://www.pickup-japan.com/css/destyle.css">
  <link rel="stylesheet" href="https://www.pickup-japan.com/css/common.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- 追加読み込み ここから-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
  <link href="css/contact.css" type="text/css" rel="stylesheet" media="all">
  <!-- 追加読み込み ここまで -->

  <meta name="robots" content="noodp">
  <meta name="robots" content="noydir">
</head>

<body>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91799891-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-91799891-1');
  </script>


  <header>
    <div class="header">
      <div class="header_inner container">
        <h1><a href="https://www.pickup-japan.com/"><img src="https://www.pickup-japan.com/images/common/header_logo.png" alt="リサイクルショップ「ピックアップ」"></a></h1>
        <nav>
          <ul class="header_nav">
            <li><a href="https://www.pickup-japan.com/shop/">店舗を探す</a></li>
            <li><a href="https://www.pickup-japan.com/sell/">モノを売る</a></li>
            <li><a href="https://www.pickup-japan.com/goods/">取り扱い商品</a></li>
            <li><a href="https://www.pickup-japan.com/shop/topics.html">新入荷ブログ</a></li>
          </ul>
          <ul class="header_btn">
            <li class="header_btn_online"><a href="https://store.shopping.yahoo.co.jp/pickupjapan/" target="_blank" rel="noopener">Y!ショッピング</a></li>
            <li class="header_btn_hamburger">
              <button class="header_main_menu" id="menu_btn"><span></span>メニュー</button>
              <div class="menu_wrap" id="menu_wrap">
                <div class="menu_cont">
                  <ul class="menu_list">
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/shop/" class="menu_list_btn">店舗を探す</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/sell/" class="menu_list_btn">モノを売る（買取）</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/pawnbroker/" class="menu_list_btn">質預かり</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/shop/topics.html" class="menu_list_btn">新入荷ブログ</a></li>
                  </ul>
                  <h2 class="menu_ttl">サービスガイド</h2>
                  <ul class="menu_list">
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/service/memberscard.html" class="menu_list_btn">メンバーズカードのご案内</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/service/track.html" class="menu_list_btn">トラック貸出し</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/service/tax-free.html" class="menu_list_btn">TAX FREEについて</a></li>
                  </ul>
                  <ul class="menu_list">
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/company/" class="menu_list_btn">会社案内</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/recruit/" class="menu_list_btn">採用情報</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/privacy/site_privacy.html" class="menu_list_btn">プライバシーポリシー</a></li>
                  </ul>
                </div>
                <div class="menu_close" id="menu_close"></div>
                <div class="menu_overlay" id="menu_overlay"></div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>




  <!-- コンテンツ ここから -->

  <div class="breadcrumb">
    <div class="container">
      <ul class="breadcrumb_list">
        <li class="breadcrumb_list_item"><a href="https://www.pickup-japan.com/">TOP</a></li>
        <li class="breadcrumb_list_item"><a href="https://www.pickup-japan.com/sell/">買取のご案内</a></li>
        <li class="breadcrumb_list_item"><a href="#">出張買取</a></li>
        <li class="breadcrumb_list_item">お申し込み・お問い合わせ</li>
      </ul>
    </div>
  </div>



  <form class="contact_page mb120" action="trip_contact.php" method="POST" novalidate>
    <section class="contact_main pb80">
      <div class="contactcontainer">
        <div class="pagehead">
          <h2 class="heading">出張買取<br>お申し込み・お問い合わせ</h2>
        </div>
        <div class="contactcontainer">

          <form action="" method="">

            <ul class="contact_list">
              <li class="contact_list_item">
                <label>
                  <span class="contact_list_ttl">お名前 (カタカナ)<span class="require_label">必須</span></span>
                  <input type="text" name="name" value="<?php echo htmlspecialchars($post['name']); ?>" id="name">
                </label>
                <?php if($error['name'] === 'blank'): ?>
                  <p class="redtxt error">※お名前 (カタカナ)を入力してください。</p>
                <?php endif; ?>
              </li>
              <li class="contact_list_item">
                <label>
                  <span class="contact_list_ttl">郵便番号<span class="require_label">必須</span></span>
                  <input type="text" name="address" value="<?php echo htmlspecialchars($post['address']); ?>">
                </label>
                <p class="redtxt error">※郵便番号を入力してください。</p>
              </li>
              <li class="contact_list_item">
                <label>
                  <span class="contact_list_ttl">メールアドレス<span class="require_label">必須</span></span>
                  <input type="email" name="email" value="<?php echo htmlspecialchars($post['email']); ?>">
                </label>
                <p class="redtxt error">※メールアドレスを入力してください。</p>
              </li>
              <li class="contact_list_item">
                <label>
                  <span class="contact_list_ttl">電話番号<span class="require_label">必須</span></span>
                  <input type="tel" name="tel" value="<?php echo htmlspecialchars($post['tel']); ?>">
                </label>
                <p class="redtxt error">※電話番号を入力してください。</p>
              </li>
              <li class="contact_list_item">
                <span class="contact_list_ttl">出張買取のご希望日<span class="require_label">必須</span></span>
                <ul class="contact_list_flex">
                  <li><label><span class="contact_list_ttl">第1希望日</span><input type="date" name="date" value="<?php echo htmlspecialchars($post['date']); ?>"></label></li>
                  <li><label><span class="contact_list_ttl">第2希望日</span><input type="date" name="date" value="<?php echo htmlspecialchars($post['date']); ?>"></label></li>
                  <li><label><span class="contact_list_ttl">第3希望日</span><input type="date" name="date" value="<?php echo htmlspecialchars($post['date']); ?>"></label></li>
                </ul>
                <p class="redtxt error">※出張買取のご希望日を入力してください。</p>
              </li>
              <li class="contact_list_item">
                <label>
                  <span class="contact_list_ttl">ご依頼の品目内容<span class="require_label">必須</span></span>
                  <textarea name="contact" rows="8" cols="80" placeholder="入力例：&#13;3ドア冷蔵庫 3年&#13;ドラム式洗濯機 5年&#13;液晶テレビ 50インチ TH-50JX750 2年&#13;ダイニングセット イス4脚 5年 ニトリ&#13;食器棚 3年 無印良品 高さ190×幅120&#13;チェスト 3年 無印良品 高さ120×幅90 等"><?php echo htmlspecialchars($post['contact']); ?></textarea>
                </label>
                <p class="redtxt error">※ご依頼の品目内容を入力してください。</p>
              </li>
              <li class="contact_list_item privacy_list_item">
                <span class="contact_list_ttl">個人情報保護法</span>
                <div class="privacypolicy_content">
                  テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </div>
                <div class="privacypolicy_check_box">
                  <label class="privacypolicy_check"><input type="checkbox" name="" value=""><span>個人情報保護方針に同意する</span></label>
                </div>
                <p class="redtxt error">※個人情報保護方針の同意をしてください。</p>
              </li>
            </ul>

            <a href="#inputconfirm" class="modal-open def_btn">ご入力内容の確認</a>
            <p class="def_btn inactive">ご入力内容の確認(非活性の場合)</p>

            <div id="inputconfirm">
              <div class="pagehead">
                <h2 class="heading">出張買取<br>お申し込み・お問い合わせ</h2>
              </div>
              <dl class="inputconfirm_list">
                <dt>お名前（カタカナ）</dt>
                <dd><?php echo htmlspecialchars($post['name']); ?></dd>
                <dt>郵便番号</dt>
                <dd><?php echo htmlspecialchars($post['address']); ?></dd>
                <dt>メールアドレス</dt>
                <dd><?php echo htmlspecialchars($post['email']); ?></dd>
                <dt>電話番号</dt>
                <dd><?php echo htmlspecialchars($post['tel']); ?></dd>
                <dt>出張買取のご希望日</dt>
                <dt>第1希望</dt>
                <dd><?php echo htmlspecialchars($post['date']); ?></dd>
                <dt>第2希望</dt>
                <dd><?php echo htmlspecialchars($post['date']); ?></dd>
                <dt>第3希望</dt>
                <dd><?php echo htmlspecialchars($post['date']); ?></dd>
                <dt>ご依頼の品目内容</dt>
                <dd>
                <?php echo nl2br(htmlspecialchars($post['contact']));?>
                </dd>
              </dl>
              <div class="modal_btnarea">
                <button class="return_btn modaal-close"><i class="return_arrow"></i>お問い合わせフォームへ戻る</button>
                <button type="submit" name="" class="modal_submit_btn">上記の内容で送信する</button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </section>
  </form>


  <!-- コンテンツ ここまで -->




  <footer>
    <div class="footer_inner container">
      <div class="footer_main">
        <div class="footer_left_box">
          <p class="footer_logo"><a href="https://www.pickup-japan.com/"><img src="https://www.pickup-japan.com/images/common/footer/footer_logo.png" alt="ピックアップ"></a></p>
          <p class="footer_description">総合リサイクルショップピックアップでは、金・プラチナ・ブランド品・時計・衣類・家電製品・パソコン・子供用品・サーフボード・自転車・スマートフォン・タブレット・電動工具・フィギュア・ゲーム・おもちゃ・その他いろいろな商品を取り扱ってます！！</p>
          <div class="footer_nav">
            <ul>
              <li><a href="https://www.pickup-japan.com/company/">会社案内</a></li>
              <li><a href="https://www.pickup-japan.com/privacy/site_privacy.html">プライバシーポリシー</a></li>
            </ul>
            <p>古物商許可番号 491270002808</p>
          </div>
        </div>
        <div class="footer_right_box">
          <div class="site_area online_store">
            <div>
              <p class="footer_groupsite_ttl">オンラインストア</p>
              <ul class="online_area">
                <li><a href="https://auctions.yahoo.co.jp/seller/pickupjapan9967" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/yahooauction.png" alt="ヤフオク"></a></li>
                <li><a href="https://store.shopping.yahoo.co.jp/pickupjapan/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/shopping.png" alt="ヤフーショッピング"></a></li>
              </ul>
            </div>
          </div>
          <div class="site_area">
            <p class="footer_groupsite_ttl">グループサイト</p>
            <ul class="group_area">
              <li><a href="https://www.treasure-f.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_tf.png" alt="トレファク"></a></li>
              <li><a href="https://www.tf-style.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_style.png" alt="トレファクスタイル"></a></li>
              <li><a href="https://brandcollect.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_brandcollect.png" alt="ブランドコレクト"></a></li>
              <li><a href="https://www.tf-style.com/uselet/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_uselet.png" alt="ユーズレット"></a></li>
              <li><a href="https://sports.treasure-f.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_sports.png" alt="トレファクスポーツ"></a></li>
              <li><a href="https://www.treasure-f.com/market/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_market.png" alt="トレファクマーケット"></a></li>
              <li><a href="https://www.tfhikkoshi.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_hikkoshi.png" alt="トレファク引越"></a></li>
              <li><a href="https://www.cariru.jp/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_cariru.png" alt="カリル"></a></li>
              <li><a href="https://www.tf-fudosan.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_fudosan.png" alt="トレファク不動産"></a></li>
              <li><a href="https://www.golfkids.co.jp/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_golfkids.png" alt="ゴルフキッズ"></a></li>
              <li><a href="https://www.kind.co.jp/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_kindal.png" alt="カインドオル"></a></li>
              <li><a href="https://www.pickup-japan.com/"><img src="https://www.pickup-japan.com/images/common/footer/group_pickup.png" alt="ピックアップ"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <p class="copyright">&copy;2002-2020 Pick up all rights reserved.</p>
  </footer>

  <script type="text/javascript" src="https://www.pickup-japan.com/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"></script>
  <script src="https://www.pickup-japan.com/js/ofi.js"></script>


  <!-- 追加読み込み ここから -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
  <script src="js/script.js"></script>
  <!-- 追加読み込み ここまで -->

</body>

</html>
