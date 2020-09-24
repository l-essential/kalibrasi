$.sessionTimeout({
                    // custom warning title
                    title:'Your session is About to Expire!',
                    message: '<?php echo $this->session->userdata('ses_username'); ?> your session is about to expire.',
                    logoutButton:'Logout',
                    keepAliveButton:'Stay Connected',


                    keepAliveUrl: '<?php echo site_url('Dashboard') ?>',
                    logoutUrl: '<?php echo site_url('Login/logout') ?>',
                    redirUrl: '<?php echo site_url('Login/logout') ?>',
                    //warnAfter: 3000, //3 detik, 60000 = 1 menit
                    warnAfter:  187000, // 5 menit
                    redirAfter: 300000, // 3 menit
                    countdownBar: true
                });