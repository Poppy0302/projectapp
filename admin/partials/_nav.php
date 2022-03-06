    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="index.php" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">Pizza Delivery</span>
                </a>

                <div class="nav__list">
                    <a href="index.php" class="nav__link nav-home">
                      <i class='bx bx-grid-alt nav__icon' ></i>
                      <span class="nav__name">หน้าหลัก</span>
                    </a>
                    <a href="index.php?page=orderManage" class="nav-orderManage nav__link ">
                      <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                      <span class="nav__name">คำสั่งซื้อ</span>
                    </a>
                    <a href="index.php?page=categoryManage" class="nav__link nav-categoryManage">
                      <i class='bx bx-folder nav__icon' ></i>
                      <span class="nav__name">หมวดหมู่</span>
                    </a>
                    <a href="index.php?page=menuManage" class="nav__link nav-menuManage">
                      <i class='bx bx-message-square-detail nav__icon' ></i>
                      <span class="nav__name">เมนู</span>
                    </a>
                    <a href="index.php?page=userManage" class="nav__link nav-userManage">
                      <i class='bx bx-user nav__icon' ></i>
                      <span class="nav__name">ผู้ใช้</span>
                    </a>
                    <a href="index.php?page=siteManage" class="nav__link nav-siteManage">
                      <i class="fas fa-cogs"></i>
                      <span class="nav__name">ตั้งค่า</span>
                    </a>
                </div>
            </div>
            <a href="partials/_logout.php" class="nav__link">
              <i class='bx bx-log-out nav__icon' ></i>
              <span class="nav__name">ออกจากระบบ</span>
            </a>
        </nav>
    </div>  
    

<script>
    <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
	  $('.nav-<?php echo $page; ?>').addClass('active')
</script>
   