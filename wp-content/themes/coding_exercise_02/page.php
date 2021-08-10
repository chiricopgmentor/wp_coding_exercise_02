<?php get_header(); ?>
<main>
      <article>
        <section class="ly_section" id="contact">
          <div
            class="ly_section_inner ly_section_inner__bgi"
            style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/img/contact-bgi@2x.jpg)"
          >
            <div class="ly_pageWrapper__outer">
              <div
                class="
                  el_sectionTitle_wrapper el_sectionTitle_wrapper__vCenter
                  hp_center
                "
              >
                <h2 class="el_sectionTitle hp_white"><?php the_title(); ?></h2>
              </div>
              <!-- /.el_sectionTitle_wrapper -->
              <div class="el_bgText_wrapper">
                <p class="el_bgText hp_bgWhite hp_mt280 hp_pb40 hp_mt256__sp">
                  Contact us
                </p>
              </div>
              <!-- /.el_bgText_wrapper -->
            </div>
            <!-- /.ly_pageWrapper__outer -->
          </div>
          <!-- /.ly_section_inner -->
          <div class="ly_pageWrapper__outer">
            <div class="bl_contactForm_wrapper">
              <form class="bl_contactForm" action="#!" name="bl_contactForm">
                <label class="bl_contactForm_label hp_mb13__sp">お問い合わせ内容</label>
                <div class="bl_contactForm_chkboxUnit">
                  <div class="bl_contactForm_chkbox_wrapper">
                    <input
                      class="bl_contactForm_chkbox"
                      type="checkbox"
                      name="bl_contactForm_chkbox"
                      value="資料請求"
                      id="bl_contactForm_chkbox__docReq"
                    />
                    <label
                      class="bl_contactForm_label"
                      for="bl_contactForm_chkbox__docReq"
                      >資料請求</label
                    >
                  </div>
                  <!-- /.bl_contactForm_chkbox_wrapper -->
                  <div class="bl_contactForm_chkbox_wrapper">
                    <input
                      class="bl_contactForm_chkbox"
                      type="checkbox"
                      name="bl_contactForm_chkbox"
                      value="お電話でのご相談を希望"
                      id="bl_contactForm_chkbox__telConsul"
                    />
                    <label
                      class="bl_contactForm_label"
                      for="bl_contactForm_chkbox__telConsul"
                      >お電話でのご相談を希望</label
                    >
                  </div>
                  <!-- /.bl_contactForm_chkbox_wrapper -->
                  <div class="bl_contactForm_chkbox_wrapper">
                    <input
                      class="bl_contactForm_chkbox"
                      type="checkbox"
                      name="bl_contactForm_chkbox"
                      value="申し込み"
                      id="bl_contactForm_chkbox__application"
                    />
                    <label
                      class="bl_contactForm_label"
                      for="bl_contactForm_chkbox__application"
                    >
                      申し込み
                    </label>
                  </div>
                  <!-- /.bl_contactForm_chkbox_wrapper -->
                </div>
                <!-- /.bl_contactForm_chkboxUnit -->
                <label class="bl_contactForm_label" for="bl_contactForm_name"
                  >担当者名</label
                >
                <input
                  class="bl_contactForm_inputBox"
                  type="text"
                  name="bl_contactForm_name"
                />
                <label class="bl_contactForm_label" for="bl_contactForm_tel"
                  >電話番号</label
                >
                <input
                  class="bl_contactForm_inputBox"
                  type="tel"
                  name="bl_contactForm_tel"
                />
                <label class="bl_contactForm_label" for="bl_contactForm_mail"
                  >メールアドレス</label
                >
                <input
                  class="bl_contactForm_inputBox"
                  type="email"
                  name="bl_contactForm_mail"
                />
                <label class="bl_contactForm_label" for="bl_contactForm_other"
                  >その他</label
                >
                <textarea
                  class="bl_contactForm_inputArea"
                  name="bl_contactForm_other"
                  id="bl_contactForm_other"
                  cols="30"
                  rows="10"
                ></textarea>
                <div class="el_btnWrapper">
                  <input
                    class="el_btn el_btn__submit"
                    type="submit"
                    value="Submit"
                  />
                </div>
                <!-- /.el_btnWrapper -->
              </form>
            </div>
            <!-- /.bl_contactForm_wrapper -->
          </div>
          <!-- /.ly_pageWrapper__outer -->
        </section>
        <!-- /#contact -->
      </article>
    </main>
<?php get_footer(); ?>