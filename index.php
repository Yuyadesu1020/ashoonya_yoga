<?php include 'common.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashoonya_Yoga</title>


    <?php include 'header.php'; ?>

    <main>
        <section class="hero">
            <div class="slide" id="heroSlide">
                <img src="img/slide_001.jpg" alt="" class="slide__img is-active">
                <img src="img/slide_002.jpg" alt="" class="slide__img">
                <img src="img/slide_003.jpg" alt="" class="slide__img">
            </div>

            <!-- スライドの“上”に常時重ねるキャッチ -->
            <div id="catch">
                <img src="img/catch.png" alt="キャッチフレーズ">
            </div>
        </section>

        <div class="l-main">

            <section>
                <div class="bg-blue half">
                    <section class="contents-width">
                        <div class="top-business-box">
                            <div class="inner">
                                <div class="img">
                                    <img src="img/free_001.jpeg" alt="" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1200">
                                </div>
                                <div class="txt" data-aos="fade" data-aos-delay="800" data-aos-duration="800">
                                    <p>
                                        「Ashoonya yoga（アシューニャヨガ）」へようこそ。<br>
                                        名護の静かな時間の中で、少人数制ならではの落ち着いたヨガを楽しんでいただけます。<br>
                                        週に一度、ご自身のための大切なリフレッシュ時間を一緒に過ごしましょう。

                                    </p>
                                    <!-- <p class="btn_wk btn-l"><a href="primigo.php"><span>詳細を見る</span></a></p> -->
                                    <p class="btn01"><a href="contact.php"><span>プロフィールへ</span></a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <section class="news">
                <div class="single" data-aos="fade" data-aos-delay="800" data-aos-duration="800">
                    <h3 class="title01 type2"><span class="ja">ブログ</span><span class="eng">Blog</span></h3>
                    <div class="row">
                        <dl class="first_row">
                            <dt>
                                2025.8.14 <br class="desktop-hidden">
                                <span>お知らせ</span>
                            </dt>
                            <p>
                                テスト文です。
                            </p>
                        </dl>

                    </div>
                    <p class="btn01">
                        <a href="https://ashoonyayoga.blogspot.com/" target="_blank">一覧を見る</a>
                    </p>
                </div>
            </section>

            <section>
                <div class="single" data-aos="fade" data-aos-delay="800" data-aos-duration="800">
                    <h3 class="title01 type2"><span class="ja">コンテンツ</span><span class="eng">Contents</span></h3>
                    <div class="cards">
                        <a class="card" href="#">
                            <figure class="card__img"><img src="img/top_002.jpg" alt=""></figure>
                            <div class="card__body">
                                <h2 class="card__title">クラス＆料金</h2>
                                <p class="card__text">テキストが入ります。テキストが入ります。</p>
                            </div>
                            <span class="card__cta">View More</span>
                        </a>

                        <a class="card" href="#">
                            <figure class="card__img"><img src="img/top_001.jpg" alt=""></figure>
                            <div class="card__body">
                                <h2 class="card__title">予約・お問い合わせ</h2>
                                <p class="card__text">テキストが入ります。テキストが入ります。</p>
                            </div>
                            <span class="card__cta">View More</span>
                        </a>
                    </div>
                </div>
            </section>

        </div>

    </main>

    <?php include 'footer.php'; ?>


    <script>
        // 画像を含む全リソースの読み込み完了後に初期化＆再計測
        window.addEventListener('load', () => {
            AOS.init({
                once: false
            }); // 好みで
            AOS.refresh(); // 画像読み込み後に位置を再計算
        });
    </script>
    <script>
        window.addEventListener('load', function() {
            viewSlide('.slide img');
        });

        function viewSlide(className, slideNo = -1) {
            let imgArray = document.querySelectorAll(className);
            if (slideNo >= 0) {
                // 初回以外は現在のスライドを消す
                imgArray[slideNo].style.opacity = 0;
            }
            slideNo++;
            if (slideNo >= imgArray.length) {
                slideNo = 0; // 次のスライドがなければ最初に戻る
            }
            imgArray[slideNo].style.opacity = 1;

            let msec = 3000; // ★ 固定で3秒に設定（自由に変更可）
            setTimeout(function() {
                viewSlide(className, slideNo);
            }, msec);
        }
    </script>
    <script>
        const slide = document.getElementById('heroSlide');
        // ここが重要：.slide__img だけ取得（catchは含めない）
        const slides = slide.querySelectorAll('.slide__img');
        let i = 0;

        function show(n) {
            slides.forEach((el, idx) => el.classList.toggle('is-active', idx === n));
        }

        show(i);
        setInterval(() => {
            i = (i + 1) % slides.length; // 3枚でループ
            show(i);
        }, 5000);
    </script>
    </body>

</html>




<!-- 前回のファイルが機能するとき -->
<!-- lsof -i :3000 
 ↓
kill -9 13538-->