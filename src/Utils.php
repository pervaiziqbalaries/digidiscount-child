<?php 

namespace Digidiscount\Affiliate;

/**
 * Class Utils
 *
 * It provides Plugin's Meta information
 *
 * @package digidiscount\affiliate;
 */

 class Utils {

    public static function plugin_path() {
        return untrailingslashit( plugin_dir_path( __DIR__ ) );
    }

    public static function plugin_url() {
        return untrailingslashit( plugin_dir_url( __DIR__ ) );
    }

    public static function child_dir() {
        return untrailingslashit( get_stylesheet_directory());
    }

    public static function api_url() {
        return "https://api.kelkoogroup.net/publisher/shopping/v2/";
    }

    public static function api_headers() {
        return array(
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer eyJraWQiOiJjM2RkMzkxOC04ODY5LTRmNjYtOTllMi03ZjU3M2QxMmE3OTciLCJhbGciOiJSUzUxMiJ9.eyJzdWIiOiJwbXdzLWFwcGxpY2F0aW9uLWlkOjYyOTAiLCJhenAiOiJQdWJsaXNoZXJzIiwicm9sZXMiOlsiU2hvcHBpbmdBUEkiLCJSZXBvcnRpbmdBUEkiXSwiaXNzIjoiS2Vsa29vIEdyb3VwIiwiaWF0IjoxNjg1MzEzOTk1LCJqdGkiOiJjZWZhNzdiYi0xMWQ3LTQ0ZDEtYTQwZC00ZjgwNGY4NzA3ZTYifQ.EqzTMGEHOt_ckI5Eut_XAm10g1gLQ2XxNHCumFTft_7C33ZsSPgucg6AhYQ3khfGE1iwbBKNwtCSEUgUJeVOsf1ER9bXHqBD5oyzpCMKgWemhGdCKyfXJBzU2-1K443kN54VRvX8gdKcRQ78SaEXNHi0CuSMJwV5VaY7diYM5v6rIwjcYjOoY-Dqys1d3GlsBMoPZ4segI6MXei4aH0AW4pVvtgdqd4RXa0XzWGYfyqSs1wBm6AwA1vzHHJU8CvxKR6vqxG_zSIuMTM0UfoHZMZjuIwyWgeuYCgql1MW2zaXT30Pf_R1aoh2VcUYp_xssZLlfEp44LhcGV_dc8VPU3HCphwXJ82ElZ7N8bBmuWxmPeSTXpb46fLU6UOPq2BrhF86Qj4tLKN_Zcpz8KaU2t_thmED4lTas3JbArccXodJZ09TScjM_vCimFkHMbkfr-2eS-9euNjOOtk3MAU7akUxcTy_pIuTa3MU5iu7AkqLhcIuSPjbYvWyLRQyw4Tu4pqW-I0cGNm5eI2tL5qaWfDtZ9B_YUG3psHnYSQZ_XHAMgMDjcPN9g_ln_Ep09UxYw7nTjCv6plI0tHJCctWwNxfj05tv09dcIMPdWA1d1Mj2iWGipehLAAOErldHkhglWO5DwfzfpoH58E6-gIFvyG3xhCRFrlpfYUPpRz6bR4'
        );
    }
 }