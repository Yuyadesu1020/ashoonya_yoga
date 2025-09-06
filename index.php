<?php include 'common.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashoonya_Yoga</title>


    <?php include 'header.php'; ?>

    <main>
        <!-- <section class="hero">
            <div class="slide" id="heroSlide">
                <img src="img/slide_001.jpg" alt="" class="slide__img is-active">
                <img src="img/slide_002.jpg" alt="" class="slide__img">
                <img src="img/slide_003.jpg" alt="" class="slide__img">
            </div>

            <div id="catch">
                <img src="img/catch.png" alt="キャッチフレーズ">
            </div>
        </section> -->

        <section id="hero">
            <div class="catchphrase">
                <div>
                    <h1>Ashoonya yoga</h1>
                    <p>
                        MEIO UNIVERSITY <br />
                        WEB DESIGNER
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <p>
                        Ashoonya yoga（アシューニャヨガ）。<br />
                        名護の穏やかな時間に寄り添う小さな教室です。<br />
                        少人数だから届く、ていねいなガイド。<br />
                        週に一度、あなたのためだけの静かなリセット。<br />
                        インドでの学びと人とのつながりを礎に、<br />
                        呼吸・姿勢・意識を一つに。<br />
                        無理なく、心地よく、続けられるヨガを。<br />
                        今日の自分を、やさしく好きになれる場所へ。
                    </p>
                </div>
                <div class="scrolldown2">
                    <span>Scroll</span>
                </div>
            </div>
        </section>

        <div class="l-main">

            <section class="news bg-yoga">
                <div class="single" data-aos="fade" data-aos-delay="800" data-aos-duration="800">
                    <h3 class="title01"><span class="ja">ブログ</span><span class="eng">Blog</span></h3>
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

                <div class="single" data-aos="fade" data-aos-delay="800" data-aos-duration="800">
                    <h3 class="title01 type2"><span class="ja">コンテンツ</span><span class="eng">Contents</span></h3>
                    <div class="cards">

                        <a class="card" href="#">
                            <div class="card__body">
                                <h2 class="card__title">プロフィール</h2>
                            </div>
                        </a>
                        <a class="card" href="#">
                            <!-- <figure class="card__img"><img src="img/top_002.jpg" alt=""></figure> -->
                            <div class="card__body">
                                <h2 class="card__title">クラス＆料金</h2>
                            </div>
                            <!-- <span class="card__cta">View More</span> -->
                        </a>

                        <a class="card" href="#">
                            <div class="card__body">
                                <h2 class="card__title">予約・お問い合わせ</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

        </div>

    </main>

    <?php include 'footer.php'; ?>



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