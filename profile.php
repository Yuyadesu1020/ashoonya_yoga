<?php include 'common.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール</title>


    <?php include 'header.php'; ?>

    <main>
        <section id="profile">
            <div class="single">
                <h3 class="title01"><span class="ja">プロフィール</span><span class="eng">Profile</span></h3>
                <h2 class="title02"><span class="ja">自己紹介</span><span class="eng">Introduction</span></h2>
                <div class="profile_box">

                    <div>
                        <h3>あき</h3>
                        <div class="info">
                            <p>
                                こんにちは、ヨガインストラクターの「あき」です。沖縄・名護を拠点に、少人数でじっくり向き合えるクラスを開いています。<br>
                                ヨガとの出会いは、忙しい毎日の中で“呼吸が浅くなっている自分”に気づいたこと。呼吸を深め、土台となる姿勢を整えるだけで、心も体も軽くなる——その実感を確かなものにしたくて、インドでの学びを経て指導を始めました。<br>
                                レッスンでは、ポーズの形より“感覚”を重視。関節にやさしい動き方、筋力と柔軟性のバランス、そして生活に持ち帰れるセルフケアをお伝えします。初めての方、ブランクのある方、運動が苦手な方もご安心ください。<br>
                                ヨガは競争ではなく対話。一人ひとりの呼吸に合わせて、無理なく続く習慣づくりをサポートします。<br>
                                名護の風を感じながら、今日の自分にちょうどいいヨガを。<br>
                                <small>
                                    Yoga / Nago / India
                                </small>
                            </p>
                        </div>
                    </div>

                    <div class="top_profile">
                        <img src="./img/profile_001.jpg" alt="自撮り" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>
        <section id="descript2">
            <div class="single">
                <h2 class="title02"><span class="ja">シヴァナンダヨガとは</span><span class="eng">Sivananda Yoga</span></h2>
                <div class="phase1">
                    <div>
                        <img src="img/profile_002.png" alt="シヴァナンダヨガ" data-aos="fade" data-aos-delay="800" data-aos-duration="800">
                    </div>
                    <p>
                        マスター・スワミ・シヴァナンダ師によって4つのヨガの道を組み合わせ提唱された統合的なヨガです。<br>
                        その教えは「奉仕、愛、与え、浄化、瞑想、自己実現（悟り）」に要約されています。
                        弟子の1人であるスワミ・ヴィシュヌデヴァナンダ師によって、現代社会に生きる人々に分かりやすいように教えを5つに集約しています。
                        【5つのポイント】<br>
                        1.適切な運動-Asanas<br>
                        2.適切な呼吸-Pranayama<br>
                        3.適切なリラックス-Savasana <br>
                        4.適切な食事-Vegetarian<br>
                        5.ポジティブな思考と瞑想-Vedanta and Dhyana「健康は富，心の平和は幸福。ヨガはその道を示す。」のコンセプトは、世界に広がり現代に受け継がれています。<br>
                        2つの呼吸法に始まり、太陽礼拝などの準備運動、
                        12の基本のアサナで成り立つシヴァナンダヨガは自分の日課にしやすいバランスのいい練習です！
                    </p>
                </div>
                
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    </body>

</html>




<!-- 前回のファイルが機能するとき -->
<!-- lsof -i :3000 
 ↓
kill -9 13538-->