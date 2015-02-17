<?php

/* SonataPageBundle::base_error.html.twig */
class __TwigTemplate_f2551fbacf91a06faf3b4d7b03315a6014969ea682c366db6e6b62f2084894f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_stylesheets' => array($this, 'block_page_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["title"] = (($this->renderBlock("title", $context, $blocks)) ? ($this->renderBlock("title", $context, $blocks)) : ("Sonata Project - Internal Error"));
        // line 12
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 17
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 21
        echo "
        <title>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"page-header\">
                    <h1>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1>
                </div>

                <div class=\"row\">
                    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>
   </body>
</html>
";
    }

    // line 17
    public function block_page_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatapage/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >
        ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataPageBundle::base_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  71 => 19,  66 => 18,  63 => 17,  54 => 34,  52 => 33,  45 => 29,  35 => 22,  32 => 21,  30 => 17,  23 => 12,  21 => 11,);
    }
}
