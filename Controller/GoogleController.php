<?php

namespace Phabriks\GoogleBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Manage google webmaster functionalities blocks
 */
class GoogleController extends Controller
{
    /**
     * Render the google analytics block
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function analyticsAction()
    {
        $siteCode = $this->getConfigResolver()->getParameter( 'google.analytics.site_code', 'phabriks' );

        return $this->render(
            'PhabriksGoogleBundle:google:analytics.html.twig',
            array( 'site_code' => $siteCode )
        );
    }

    /**
     * Render the google site verification block
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function siteVerificationAction()
    {
        $verificationCode = $this->getConfigResolver()->getParameter( 'google.webmastertools.verif_code', 'phabriks' );

        return $this->render(
            'PhabriksGoogleBundle:google:site_verification.html.twig',
            array( 'verification_code' => $verificationCode )
        );
    }
}
