<?php

/* SonataMediaBundle:Extra:pixlr_exit.html.twig */
class __TwigTemplate_b752f89a69ddb723b03a23983d1264b1610f696906aa19d858033bc9dd29896b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_exit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 11,);
    }
}
