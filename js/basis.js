  document.addEventListener('DOMContentLoaded', function () {
    const openBtn = document.querySelector('.openbtn');
    const nav = document.querySelector('header nav');
    if (!openBtn || !nav) return;

    function toggleMenu() {
      openBtn.classList.toggle('active');
      nav.classList.toggle('active');
      document.body.classList.toggle('is-menu-open');
    }

    openBtn.addEventListener('click', toggleMenu);

    // メニュー内リンクを押したら閉じる
    nav.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        openBtn.classList.remove('active');
        nav.classList.remove('active');
        document.body.classList.remove('is-menu-open');
      });
    });
  });

  //HTML文書が読み込まれたときにこの機能が発動する
document.addEventListener("DOMContentLoaded", function () {
    //変数名にid名topを取得し、格納する
    var pagetopButton = document.getElementById("top");

    pagetopButton.addEventListener("click", function (event) {
        //元々の機能を停止する
        event.preventDefault();

        // Scroll to the top of the page smoothly
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});


// スクロールすると、pagetopボタンのフェードイン、フェードアウト
document.addEventListener("DOMContentLoaded", function(){
    // 変数名scrollButtonにclass名(.scroll)を一致させる↓
    var scrollButton = document.querySelector('.scroll');

    //スクロールイベントを投入
    window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
            //スクロール量が指定より以上場合、visibleクラスを追加
            scrollButton.classList.add('visible');
        } else {
            //スクロール量が指定より以下だった場合、visibleクラスを削除
            scrollButton.classList.remove('visible');
        }
    });
});

(() => {
  'use strict';

  // ---- 設定（必要なら数値だけ変えてOK）----
  const MIN_SHOW_MS = 600;   // 最低表示時間
  const MAX_WAIT_MS = 8000;  // 安全タイムアウト

  // 早めにスクロールをロック（FOUC防止）
  document.documentElement.classList.add('is-loading');

  // 既に #loader があれば使う。無ければ最小構成を自動挿入
  let loader = document.getElementById('loader');
  if (!loader) {
    loader = document.createElement('div');
    loader.id = 'loader';
    loader.className = 'loader';
    loader.setAttribute('aria-live', 'polite');
    loader.setAttribute('aria-busy', 'true');

    const ring = document.createElement('div');
    ring.className = 'loader__ring';
    ring.setAttribute('role', 'img');
    ring.setAttribute('aria-label', '読み込み中');
    loader.appendChild(ring);

    document.body.prepend(loader);
  }

  const start = performance.now();

  function hideLoader() {
    document.documentElement.classList.remove('is-loading');
    if (!loader) return;
    loader.classList.add('is-hidden');
    loader.addEventListener('transitionend', () => loader.remove(), { once: true });
  }

  function onReady() {
    const elapsed = performance.now() - start;
    const remain = Math.max(0, MIN_SHOW_MS - elapsed);
    setTimeout(hideLoader, remain);
  }

  if (document.readyState === 'complete') {
    onReady();
  } else {
    window.addEventListener('load', onReady, { once: true });
  }

  // 万が一の詰まり対策
  setTimeout(onReady, MAX_WAIT_MS);

  // ---- 任意：Fetch を使う時に上部プログレスを出す（CSSの body.busy::before とセット）----
  const origFetch = window.fetch;
  window.fetch = function (...args) {
    document.body.classList.add('busy');
    return origFetch.apply(this, args)
      .finally(() => document.body.classList.remove('busy'));
  };
})();
