<?php include 'common.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール</title>


    <?php include 'header.php'; ?>

    <main>
        <section id="price">
            <div class="single">
                <div class="price-card">

                    <ul class="price-notes p0">
                        <li>名護・インドスタイル ハタヨガ（60分）</li>
                        <li>都度参加　2,000円（税込）</li>
                        <li>3回チケット　5,000円（税込）<br><small>※ 発行日から1年有効</small></li>
                        <li>ハタヨガ全クラスで利用可<br><small>※ 払い戻し不可</small></li>
                    </ul>

                    <p class="lead">クラスラインナップ（運動量目安）</p>

                    <ol class="class-list">
                        <li>
                            <h3>リラックス・ハタ <span class="level">（運動量☆）</span></h3>
                            <p>呼吸法（プラーナーヤーマ）とやさしいアーサナで、ゆったりと整えるクラス。初めての方、やさしいクラスから始めたい方に。最後はシャヴァーサナで深い休息。</p>
                        </li>
                        <li>
                            <h3>ベーシック・ハタ <span class="level">（運動量☆★）</span></h3>
                            <p>太陽礼拝（スーリヤ・ナマスカーラ）や基本のアーサナを丁寧に練習。立位・座位をバランスよく行い、呼吸と姿勢（アライメント）を学びます。</p>
                        </li>
                        <li>
                            <h3>リフレッシュ・ハタフロー <span class="level">（運動量☆★★）</span></h3>
                            <p>最も運動量のあるクラス。呼吸に合わせて流れるように動き、汗をかいて心身をリセット。集中と解放を味わえる、しっかり動きたい方向け。</p>
                        </li>
                    </ol>
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