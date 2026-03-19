$(document).ready(function() {

  // deepseek 一级菜单
  if (window.innerWidth <= 991) {
    // let toggles = document.querySelectorAll('.dropdown > .dropdown-toggle, .dropdown-submenu > .dropdown-toggle');
    let toggles = document.querySelectorAll('.dropdown > .dropdown-toggle');
    toggles.forEach(function(toggle) {
      toggle.addEventListener('click', function(e) {
        e.preventDefault();
        this.parentElement.classList.toggle('open');
        console.log('dropdown menu');
      });
    });

  }


  // qwen
  function isMobile() {
    return window.innerWidth < 992;
  }

  // 选择所有三级菜单的触发器 (既有 dropdown-item 又有 dropdown-toggle)
  // 注意：这里选择的是 li.dropdown-submenu 下面的 a 标签
  let submenuToggles = document.querySelectorAll('.dropdown-submenu > .dropdown-toggle');

  submenuToggles.forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
      // 如果是桌面端，让 Bootstrap 默认行为或 CSS hover 处理，或者直接返回
      // 但为了保险起见，我们只在移动端强制干预
      if (!isMobile()) {
        return; 
      }

      e.preventDefault();
      e.stopPropagation(); // 阻止事件冒泡，防止触发父级菜单的关闭

      const parentLi = this.parentElement; // 获取 <li class="dropdown-submenu">
      
      // 切换 open 类
      const isOpen = parentLi.classList.contains('open');
      
      // (可选) 如果想实现手风琴效果（打开一个时关闭同级其他），取消下面注释
      /*
      const siblings = parentLi.parentElement.querySelectorAll('.dropdown-submenu.open');
      siblings.forEach(sib => {
        if (sib !== parentLi) sib.classList.remove('open');
      });
      */

      if (isOpen) {
        parentLi.classList.remove('open');
        this.setAttribute('aria-expanded', 'false');
      } else {
        parentLi.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
      }
      
      console.log('Submenu toggled:', parentLi);
    });
  });

    // Smooth scrolling (unchanged)
    $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  
    // Form submission (unchanged)
    // $('form').on('submit', function(e) {
    //   if (!$(this).hasClass('search-form')) {
    //     e.preventDefault();
    //     alert('Form submitted! (Demo)');
    //   }
    // });
  
    // Search toggle
    $('.search-icon').on('click', function() {
      $('.search-form').toggle();
    });

    
    
});

  function performSiteSearch(event) {
    event.preventDefault(); // 阻止表单默认提交（防止页面刷新）
  
    const query = document.getElementById('siteSearchInput').value.trim();
  
    if (query === '') {
      alert('请输入搜索内容');
      return;
    }
  
    // 母公司 unityskills.com.au
    // 两个分校 uscohealth.edu.au
    // uscohospitality.edu.au

    // 构造 Google 站内搜索 URL
    const searchUrl = `https://www.google.com/search?q=site:uscohealth.edu.au ${encodeURIComponent(query)}`;
  
    // 在新标签页打开
    window.open(searchUrl, '_blank');
  
    // 可选：清空输入框
    document.getElementById('siteSearchInput').value = '';
  }
