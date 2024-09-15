<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SettingTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('setting_translations')->insert([
            [
                'id' => 1,
                'setting_id' => 1,
                'locale' => 'en',
                'value' => '{"home":{"title":"Home","description":"Home Page Description","robot":"index"},"search":{"title":"Search","description":"Search Page Description","robot":"index"},"categories":{"title":"Category","description":"Categories Page Description","robot":"index"},"login":{"title":"Login","description":"Login Page Description","robot":"index"},"register":{"title":"Register","description":"Register Page Description","robot":"index"},"about":{"title":"about page title","description":"about page Description"},"contact":{"title":"Contact","description":"Contact Page Description","robot":"index"},"certificate_validation":{"title":"Certificate validation","description":"Certificate Validation Description","robot":"index"},"classes":{"title":"Courses","description":"Courses page Description","robot":"index"},"blog":{"title":"Blog","description":"Blog Page Description","robot":"index"},"instructors":{"title":"Instructors","description":"Instructors Page Description","robot":"index"},"organizations":{"title":"Organizations","description":"Organizations Page Description","robot":"index"},"instructor_finder_wizard":{"title":"Instructor finder wizard","description":"Tutor Finder Wizard Description","robot":"noindex"},"instructor_finder":{"title":"Instructor finder","description":"Tutor Finder Description","robot":"index"},"reward_courses":{"title":"Reward courses","description":"Reward Courses Description","robot":"index"},"products_lists":{"title":"Store Products","description":"Store Products Description","robot":"noindex"},"reward_products":{"title":"Reward Products","description":"Reward Products Description","robot":"noindex"},"forum":{"title":"Forums","description":"Forums Description","robot":"noindex"},"upcoming_courses_lists":{"title":"Upcoming Course","description":"Upcoming Courses Description","robot":"noindex"},"tags":{"title":"Tags","description":"Tags Page Description","robot":"noindex"}}',
            ],
            [
                'id' => 2,
                'setting_id' => 2,
                'locale' => 'en',
                'value' => '{"Instagram":{"title":"Instagram","image":"\\/store\\/1\\/default_images\\/social\\/instagram.svg","link":"https:\\/\\/www.instagram.com\\/","order":"1"},"Whatsapp":{"title":"Whatsapp","image":"\\/store\\/1\\/default_images\\/social\\/whatsapp.svg","link":"https:\\/\\/web.whatsapp.com\\/","order":"2"},"Twitter":{"title":"Twitter","image":"\\/store\\/1\\/default_images\\/social\\/twitter.svg","link":"https:\\/\\/twitter.com\\/","order":"3"},"Facebook":{"title":"Facebook","image":"\\/store\\/1\\/default_images\\/social\\/facebook.svg","link":"https:\\/\\/www.facebook.com\\/","order":"4"}}',
            ],
            [
                'id' => 4,
                'setting_id' => 5,
                'locale' => 'en',
                'value' => '{"site_name":"Code S Academy","site_email":"info@code-s-academy.com","site_phone":"071112287957","site_language":"DE","register_method":"email","default_time_zone":"Europe\\/Berlin","date_format":"textual","time_format":"24_hours","user_languages":["DE"],"fav_icon":"\\/store\\/1051\\/395478.jpg","logo":null,"footer_logo":null,"rtl_layout":"0","preloading":"1","hero_section1":"1","hero_section2":"0","content_translate":"1","app_debugbar":"1"}',
            ],
            [
                'id' => 5,
                'setting_id' => 6,
                'locale' => 'en',
                'value' => '{"tax":"0","minimum_payout":"0","price_display":"only_price","hide_disabled_payment_gateways":"1"}',
            ],
            [
                'id' => 6,
                'setting_id' => 8,
                'locale' => 'en',
                'value' => '{"title":"Joy of learning & teaching...","description":"Code S Academy is a fully-featured educational platform that helps instructors to create and publish video courses, live classes, and text courses and earn money, and helps students to learn in the easiest way.","hero_background":"\\/store\\/1\\/default_images\\/hero_1.jpg","is_video_background":"0"}',
            ],
            [
                'id' => 7,
                'setting_id' => 12,
                'locale' => 'en',
                'value' => '{"css":null,"js":null}',
            ],
            [
                'id' => 8,
                'setting_id' => 14,
                'locale' => 'en',
                'value' => '{"admin_login":"\\/store\\/1051\\/3553.jpg","admin_dashboard":"\\/store\\/1051\\/10680.jpg","login":"\\/store\\/1051\\/180238.jpg","register":"\\/store\\/1051\\/9795.jpg","remember_pass":"\\/store\\/1\\/default_images\\/password_recovery.jpg","verification":"\\/store\\/1\\/default_images\\/verification.jpg","search":"\\/store\\/1\\/default_images\\/search_cover.png","tags":"\\/store\\/1\\/default_images\\/search_cover.png","categories":"\\/store\\/1\\/default_images\\/category_cover.png","become_instructor":"\\/store\\/1\\/default_images\\/become_instructor.jpg","certificate_validation":"\\/store\\/1\\/default_images\\/certificate_validation.jpg","blog":"\\/store\\/1\\/default_images\\/blogs_cover.png","instructors":"\\/store\\/1\\/default_images\\/instructors_cover.png","organizations":"\\/store\\/1\\/default_images\\/organizations_cover.png","dashboard":"\\/store\\/1\\/dashboard.png","user_cover":"\\/store\\/1\\/default_images\\/default_cover.jpg","instructor_finder_wizard":"\\/store\\/1\\/default_images\\/instructor_finder_wizard.jpg","products_lists":"\\/store\\/1\\/default_images\\/category_cover.png","upcoming_courses_lists":"\\/store\\/1\\/default_images\\/category_cover.png","user_default_signature":"\\/store\\/1\\/default_images\\/default_signature.jpg"}',
            ],
            [
                'id' => 9,
                'setting_id' => 15,
                'locale' => 'en',
                'value' => '{"title":"Joy of learning & teaching...","description":"Code S Academy is a fully-featured educational platform that helps instructors to create and publish video courses, live classes, and text courses and earn money, and helps students to learn in the easiest way.","hero_background":"\\/assets\\/default\\/img\\/home\\/world.png","hero_vector":"\\/store\\/1\\/animated-header.json","has_lottie":"1"}',
            ],
            [
                'id' => 10,
                'setting_id' => 20,
                'locale' => 'en',
                'value' => '["Inappropriate Course Content","Inappropriate Behavior","Policy Violation","Spammy Content","Other"]',
            ],
            [
                'id' => 11,
                'setting_id' => 22,
                'locale' => 'en',
                'value' => '{\"new_comment_admin\":\"7\",\"support_message_admin\":\"10\",\"support_message_replied_admin\":\"11\",\"promotion_plan_admin\":\"29\",\"new_contact_message\":\"26\",\"new_badge\":\"2\",\"change_user_group\":\"3\",\"course_created\":\"4\",\"course_approve\":\"5\",\"course_reject\":\"6\",\"new_comment\":\"7\",\"support_message\":\"8\",\"support_message_replied\":\"9\",\"new_rating\":\"17\",\"webinar_reminder\":\"27\",\"new_financial_document\":\"12\",\"payout_request\":\"13\",\"payout_proceed\":\"14\",\"offline_payment_request\":\"18\",\"offline_payment_approved\":\"19\",\"offline_payment_rejected\":\"20\",\"new_sales\":\"15\",\"new_purchase\":\"16\",\"new_subscribe_plan\":\"21\",\"promotion_plan\":\"28\",\"new_appointment\":\"22\",\"new_appointment_link\":\"23\",\"appointment_reminder\":\"24\",\"meeting_finished\":\"25\",\"new_certificate\":\"30\",\"waiting_quiz\":\"31\",\"waiting_quiz_result\":\"32\",\"payout_request_admin\":\"13\",\"product_new_sale\":\"33\",\"product_new_purchase\":\"34\",\"product_new_comment\":\"35\",\"product_tracking_code\":\"36\",\"product_new_rating\":\"37\",\"product_receive_shipment\":\"38\",\"product_out_of_stock\":\"39\",\"student_send_message\":\"40\",\"instructor_send_message\":\"41\",\"instructor_set_grade\":\"42\",\"send_post_in_topic\":\"44\",\"publish_instructor_blog_post\":\"45\",\"new_comment_for_instructor_blog_post\":\"46\",\"meeting_reserve_reminder\":\"47\",\"subscribe_reminder\":\"48\",\"reminder_gift_to_receipt\":\"52\",\"gift_sender_confirmation\":\"53\",\"gift_sender_notification\":\"54\",\"admin_gift_submission\":\"55\",\"admin_gift_sending_confirmation\":\"56\",\"reminder_installments_before_overdue\":\"57\",\"installment_due_reminder\":\"58\",\"reminder_installments_after_overdue\":\"59\",\"approve_installment_verification_request\":\"60\",\"reject_installment_verification_request\":\"61\",\"paid_installment_step\":\"62\",\"paid_installment_step_for_admin\":\"63\",\"paid_installment_upfront\":\"64\",\"installment_verification_request_sent\":\"65\",\"admin_installment_verification_request_sent\":\"66\",\"instalment_request_submitted\":\"67\",\"instalment_request_submitted_for_admin\":\"68\",\"upcoming_course_submission\":\"69\",\"upcoming_course_submission_for_admin\":\"70\",\"upcoming_course_approved\":\"71\",\"upcoming_course_rejected\":\"72\",\"upcoming_course_published\":\"73\",\"upcoming_course_followed\":\"74\",\"upcoming_course_published_for_followers\":\"75\",\"user_get_cashback\":\"76\",\"user_get_cashback_notification_for_admin\":\"77\",\"bundle_submission\":\"78\",\"bundle_submission_for_admin\":\"79\",\"bundle_approved\":\"80\",\"bundle_rejected\":\"81\",\"new_review_for_bundle\":\"82\",\"registration_bonus_achieved\":\"83\",\"registration_bonus_unlocked\":\"84\",\"registration_bonus_unlocked_for_admin\":\"85\",\"registration_package_activated\":\"86\",\"registration_package_activated_for_admin\":\"87\",\"registration_package_expired\":\"87\",\"contact_message_submission\":\"88\",\"contact_message_submission_for_admin\":\"89\",\"waitlist_submission\":\"90\",\"waitlist_submission_for_admin\":\"91\",\"new_referral_user\":\"92\",\"user_role_change\":\"97\",\"add_to_user_group\":\"98\",\"become_instructor_request_approved\":\"99\",\"become_instructor_request_rejected\":\"100\",\"new_question_in_forum\":\"101\",\"new_answer_in_forum\":\"102\",\"new_appointment_session\":\"103\",\"new_quiz\":\"93\",\"user_get_new_point\":\"94\",\"new_course_notice\":\"96\",\"new_registration\":\"104\",\"new_become_instructor_request\":\"105\",\"new_course_enrollment\":\"106\",\"new_forum_topic\":\"107\",\"new_report_item_for_admin\":\"108\",\"new_item_created\":\"109\",\"new_store_order\":\"110\",\"subscription_plan_activated\":\"111\",\"content_review_request\":\"112\",\"new_user_blog_post\":\"113\",\"new_user_item_rating\":\"114\",\"new_organization_user\":\"115\",\"user_wallet_charge\":\"116\",\"new_user_payout_request\":\"117\",\"new_offline_payment_request\":\"118\",\"user_access_to_content\":\"119\",\"submit_form_by_users\":\"120\"}'
            ],
            [
                'id' => 12,
                'setting_id' => 23,
                'locale' => 'en',
                'value' => '{"540":{"title":"Qatar National Bank","image":"/store/1/default_images/offline_payments/Qatar National Bank.png","card_id":"2578-4910-3682-6288","account_id":"38152294372","iban":"QA66QUWW934528129454345775226"},"334":{"title":"State Bank of India","image":"/store/1/default_images/offline_payments/State Bank of India.png","card_id":"6282-4518-1237-7641","account_id":"56238341127","iban":"IN37ABNA2422193788"},"jhgDW":{"title":"JPMorgan","image":"/store/1/default_images/offline_payments/jpmorgan.png","card_id":"5012-4518-1772-8911","account_id":"46237751125","iban":"NL37ABNA2423554788"}}',
            ],
            [
                'id' => 13,
                'setting_id' => 24,
                'locale' => 'en',
                'value' => '{"background":"/store/1/default_images/category_cover.png","latitude":"43.45905","longitude":"11.87300","map_zoom":"16","phones":"9739248408","emails":"info@citytech.in","address":"Germany"}',
            ],
            [
                'id' => 14,
                'setting_id' => 25,
                'locale' => 'en',
                'value' => '{"latest_classes":"1","best_sellers":"1","free_classes":"1","discount_classes":"1","best_rates":"1","trend_categories":"1","testimonials":"1","subscribes":"1","blog":"1","organizations":"1","instructors":"1","video_or_image_section":"1","find_instructors":"1","reward_program":"1"}',
            ],
            [
                'id' => 15,
                'setting_id' => 26,
                'locale' => 'en',
                'value' => '{"02nh9a":{"title":"Home","link":"/","order":"1"},"1cH2kF":{"title":"Courses","link":"/classes?sort=newest","order":"2"},"Wnq5Qb":{"title":"Forums","link":"/forums","order":"5"},"WB6r16":{"title":"Contact","link":"https://lightyellow-cod-453963.hostingersite.com/contact","order":"4"},"uVh0Ae":{"title":"About","link":"/pages/about","order":"3"}}',
            ],
            [
                'id' => 16,
                'setting_id' => 27,
                'locale' => 'en',
                'value' => '{"link":"/classes","title":"Start learning anywhere, anytime...","description":"Use Code S Academy to access high-quality education materials without any limitations in the easiest way.","background":"/store/1/default_images/home_video_section.png"}',
            ],
            [
                'id' => 17,
                'setting_id' => 28,
                'locale' => 'en',
                'value' => '{"error_image":"/store/1/default_images/404.svg","error_title":"Page not found!","error_description":"Sorry, this page is not available..."}',
            ],
            [
                'id' => 18,
                'setting_id' => 29,
                'locale' => 'en',
                'value' => '{"link":"/classes?sort=newest","background":"/store/1/sidebar-user.png"}',
            ],
            [
                'id' => 19,
                'setting_id' => 30,
                'locale' => 'en',
                'value' => '{"status":"0","users_affiliate_status":"0","affiliate_user_commission":"0","store_affiliate_user_commission":"5","affiliate_user_amount":"20","referred_user_amount":"10","referral_description":"You can share your affiliate URL you will get the above rewards when a user uses the platform."}',
            ],
            [
                'id' => 20,
                'setting_id' => 4,
                'locale' => 'en',
                'value' => '{"first_column":{"title":"About US","value":"<p><font color=\"#ffffff\">Code S Academy is a fully-featured learning management system that helps you to run your education business in several hours. This platform helps instructors to create professional education materials and helps students to learn from the best instructors.</font></p>"},"second_column":{"title":"Additional Links","value":"<p><a href=\"/login\"><font color=\"#ffffff\">- Login</font></a></p><p><font color=\"#ffffff\"><a href=\"/register\"><font color=\"#ffffff\">- Register</font></a><br></font></p><p><a href=\"/blog\"><font color=\"#ffffff\">- Blog</font></a></p><p><a href=\"/contact\"><font color=\"#ffffff\">- Contact us</font></a></p><p><font color=\"#ffffff\"><a href=\"/certificate_validation\"><font color=\"#ffffff\">- Certificate validation</font></a><br></font></p><p><font color=\"#ffffff\"><a href=\"/become-instructor\"><font color=\"#ffffff\">- Become instructor</font></a><br></font></p><p><a href=\"/pages/terms\"><font color=\"#ffffff\">- Terms & rules</font></a></p><p><a href=\"/pages/about\"><font color=\"#ffffff\">- About us</font></a><br></p>"},"third_column":{"title":"Similar Businesses","value":"<p><a href=\"https://www.udemy.com/\" target=\"_blank\"><font color=\"#ffffff\">- Udemy</font></a></p><p><a href=\"https://www.skillshare.com/\" target=\"_blank\"><font color=\"#ffffff\">- Skillshare</font></a></p><p><a href=\"https://www.coursera.org/\" target=\"_blank\"><font color=\"#ffffff\">- Coursera</font></a></p><p><a href=\"https://www.linkedin.com/learning/\" target=\"_blank\"><font color=\"#ffffff\">- Lynda</font></a></p><p><a href=\"https://www.skillsoft.com/\" target=\"_blank\"><font color=\"#ffffff\">- Skillsoft</font></a></p><p><a href=\"https://www.udacity.com/\" target=\"_blank\"><font color=\"#ffffff\">- Udacity</font></a></p><p><a href=\"https://www.edx.org/\" target=\"_blank\"><font color=\"#ffffff\">- edX</font></a></p><p><a href=\"https://www.masterclass.com/\" target=\"_blank\"><font color=\"#ffffff\">- Masterclass</font></a><br></p>"},"forth_column":{"title":"Contact Us","value":"<p><font color=\"#ffffff\">+49 (0711)12287957</font></p><p><font color=\"#ffffff\">info@code-s-academy.com</font></p>"}}',
            ],
            [
                'id' => 31,
                'setting_id' => 4,
                'locale' => 'ar',
                'value' => '{\"first_column\":{\"title\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627\",\"value\":\"<p><font color=\\\"#ffffff\\\">Rocket LMS \\u0647\\u0648 \\u0646\\u0638\\u0627\\u0645 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u062a\\u0639\\u0644\\u0645 \\u0643\\u0627\\u0645\\u0644 \\u0627\\u0644\\u0645\\u064a\\u0632\\u0627\\u062a \\u064a\\u0633\\u0627\\u0639\\u062f\\u0643 \\u0639\\u0644\\u0649 \\u0625\\u062f\\u0627\\u0631\\u0629 \\u0623\\u0639\\u0645\\u0627\\u0644\\u0643 \\u0627\\u0644\\u062a\\u0639\\u0644\\u064a\\u0645\\u064a\\u0629 \\u0641\\u064a \\u0639\\u062f\\u0629 \\u0633\\u0627\\u0639\\u0627\\u062a. \\u062a\\u0633\\u0627\\u0639\\u062f \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0645\\u064a\\u0646 \\u0639\\u0644\\u0649 \\u0625\\u0646\\u0634\\u0627\\u0621 \\u0645\\u0648\\u0627\\u062f \\u062a\\u0639\\u0644\\u064a\\u0645\\u064a\\u0629 \\u0627\\u062d\\u062a\\u0631\\u0627\\u0641\\u064a\\u0629 \\u0648\\u062a\\u0633\\u0627\\u0639\\u062f \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u062a\\u0639\\u0644\\u0645 \\u0645\\u0646 \\u0623\\u0641\\u0636\\u0644 \\u0627\\u0644\\u0645\\u062f\\u0631\\u0628\\u064a\\u0646.<\\/font><\\/p>\"},\"second_column\":{\"title\":\"\\u0631\\u0648\\u0627\\u0628\\u0637 \\u0625\\u0636\\u0627\\u0641\\u064a\\u0629\",\"value\":\"<p><a href=\\\"\\/login\\\"><span style=\\\"color: #ffffff;\\\">- \\u062a\\u0633\\u062c\\u064a\\u0644 \\u0627\\u0644\\u062f\\u062e\\u0648\\u0644<\\/span><\\/a><\\/p>\\r\\n<p><span style=\\\"color: #ffffff;\\\"><a href=\\\"\\/register\\\"><span style=\\\"color: #ffffff;\\\">- \\u062a\\u0633\\u062c\\u064a\\u0644<\\/span><\\/a><br><\\/span><\\/p>\\r\\n<p><a href=\\\"\\/blog\\\"><span style=\\\"color: #ffffff;\\\">- \\u0645\\u0642\\u0627\\u0644\\u0627\\u062a<\\/span><\\/a><\\/p>\\r\\n<p><a href=\\\"\\/contact\\\"><span style=\\\"color: #ffffff;\\\">- \\u0627\\u062a\\u0635\\u0644 \\u0628\\u0646\\u0627<\\/span><\\/a><\\/p>\\r\\n<p><span style=\\\"color: #ffffff;\\\"><a href=\\\"\\/certificate_validation\\\"><span style=\\\"color: #ffffff;\\\">- \\u0627\\u0644\\u062a\\u062d\\u0642\\u0642 \\u0645\\u0646 \\u0635\\u062d\\u0629 \\u0627\\u0644\\u0634\\u0647\\u0627\\u062f\\u0629<\\/span><\\/a><br><\\/span><\\/p>\\r\\n<p><span style=\\\"color: #ffffff;\\\"><a href=\\\"\\/become-instructor\\\"><span style=\\\"color: #ffffff;\\\">- \\u0623\\u0635\\u0628\\u062d \\u0645\\u062f\\u0631\\u0628\\u0627<\\/span><\\/a><br><\\/span><\\/p>\\r\\n<p><a href=\\\"\\/pages\\/terms\\\"><span style=\\\"color: #ffffff;\\\">- \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0648\\u0627\\u0644\\u0642\\u0648\\u0627\\u0639\\u062f<\\/span><\\/a><\\/p>\\r\\n<p><a href=\\\"\\/pages\\/about\\\"><span style=\\\"color: #ffffff;\\\">- \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0639\\u0646\\u0627<\\/span><\\/a><\\/p>\"},\"third_column\":{\"title\":\"\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0645\\u0645\\u0627\\u062b\\u0644\\u0629\",\"value\":\"<p><a href=\\\"https:\\/\\/www.udemy.com\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">- \\u064a\\u0648\\u062f\\u0645\\u064a<\\/font><\\/a><\\/p><p><a href=\\\"https:\\/\\/www.skillshare.com\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">- \\u0627\\u0633\\u06a9\\u06cc\\u0644 \\u0634\\u06cc\\u0631<\\/font><\\/a><\\/p><p><a href=\\\"https:\\/\\/www.coursera.org\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">- \\u0643\\u0631\\u0633 \\u0627\\u064a\\u0631\\u0627<\\/font><\\/a><\\/p><p><a href=\\\"https:\\/\\/www.linkedin.com\\/learning\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">- \\u0644\\u06cc\\u0646\\u062f\\u0627<\\/font><\\/a><\\/p><p><a href=\\\"https:\\/\\/www.skillsoft.com\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">- \\u0627\\u0633\\u0643\\u064a\\u0644 \\u0633\\u0641\\u062a<\\/font><\\/a><\\/p><p><a href=\\\"https:\\/\\/www.udacity.com\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">- \\u0627\\u0648\\u062f\\u0627\\u0633\\u064a\\u062a\\u064a<\\/font><\\/a><\\/p><p><a href=\\\"https:\\/\\/www.edx.org\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">\\u0627\\u062f\\u0643\\u0633<\\/font><\\/a><\\/p><p><a href=\\\"https:\\/\\/www.masterclass.com\\/\\\" target=\\\"_blank\\\"><font color=\\\"#ffffff\\\">- \\u0645\\u0633\\u062a\\u0631 \\u0643\\u0644\\u0633<\\/font><\\/a><br><\\/p>\"},\"forth_column\":{\"title\":\"\\u0642\\u0645 \\u0628\\u0634\\u0631\\u0627\\u0621 Rocket LMS\",\"value\":\"<p><a title=\\\"Notnt\\\" href=\\\"https:\\/\\/codecanyon.net\\\"><img style=\\\"width: 200px;\\\" src=\\\"\\/store\\/1\\/default_images\\/envato.png\\\"><\\/a><\\/p>\"}}',
            ],
            [
                'id' => 32,
                'setting_id' => 31,
                'locale' => 'en',
                'value' => '{"agora_resolution":null,"agora_max_bitrate":"2260","agora_min_bitrate":"1130","agora_frame_rate":"15","agora_live_streaming":"1","agora_chat":"1","agora_in_free_courses":"1","agora_for_meeting":"1","meeting_live_stream_type":"single","course_live_stream_type":"single","agora_app_id":null,"agora_app_certificate":null,"new_interactive_file":"1","timezone_in_register":"1","timezone_in_create_webinar":"1","sequence_content_status":"1","webinar_assignment_status":"1","webinar_private_content_status":"0","disable_view_content_after_user_register":"0","course_forum_status":"1","forums_status":"1","direct_classes_payment_button_status":"0","direct_bundles_payment_button_status":"0","direct_products_payment_button_status":"0","cookie_settings_status":"1","mobile_app_status":"0","maintenance_status":"0","maintenance_access_key":"key","extra_time_to_join_status":"1","extra_time_to_join_default_value":"20","show_other_register_method":"1","show_certificate_additional_in_register":"0","show_google_login_button":"1","show_facebook_login_button":"1","google_client_id":null,"google_client_secret":null,"facebook_client_id":null,"facebook_client_secret":null,"show_live_chat_widget":"1","cashback_active":"1","display_cashback_notice_in_the_product_page":"1","display_minimum_amount_cashback_notices":"1","available_session_apis":["local","big_blue_button","zoom","agora","jitsi"],"available_sources":["upload","youtube","vimeo","external_link","google_drive","iframe","s3","secure_host"],"bunny_configs":[],"select_the_role_during_registration":["teacher","organization"],"waitlist_status":"1","upcoming_courses_status":"1","user_register_form":"2","instructor_register_form":"2","organization_register_form":"2","become_instructor_form":null,"become_organization_form":null,"frontend_coupons_status":"0","frontend_coupons_display_type":"before_content","course_notes_status":"1","course_notes_attachment":"1","zoom_client_id":null,"zoom_client_secret":null,"zoom_account_id":null,"bigbluebutton_server_base_url":null,"bigbluebutton_security_salt":null,"jitsi_live_url":null}'
            ],
            [
                'id' => 33,
                'setting_id' => 32,
                'locale' => 'en',
                'value' => '{"image":"/store/1/default_images/home_sections_banners/instructor_finder_banner.jpg","title":"Find the best instructor","description":"Looking for an instructor? Find the best instructors according to different parameters like gender, skill level, price, meeting type, rating, etc.\r\nFind instructors on the map.","button1":{"title":"Tutor Finder","link":"/instructor-finder/wizard"},"button2":{"title":"Tutors on Map","link":"/instructor-finder"}}'
            ],
            [
                'id' => 34,
                'setting_id' => 33,
                'locale' => 'en',
                'value' => '{"image":"/store/1/default_images/home_sections_banners/club_points_banner.png","title":"Win Club Points","description":"Use Code S Academy and win club points according to different activities.\r\nYou will be able to use your club points to get free prizes and courses. Start using the system now and collect points!","button1":{"title":"Rewards","link":"/reward-courses"},"button2":{"title":"Points Club","link":"/panel/rewards"}}'
            ],
            [
                'id' => 35,
                'setting_id' => 34,
                'locale' => 'en',
                'value' => '{"status":"1","exchangeable":"1","exchangeable_unit":"200","want_more_points_link":"/pages/reward_points_system"}'
            ],
            [
                'id' => 38,
                'setting_id' => 37,
                'locale' => 'en',
                'value' => '{"status":"1","show_packages_during_registration":"1","force_user_to_select_a_package":"0","enable_home_section":"1"}'
            ]
        ]);
    }
}
