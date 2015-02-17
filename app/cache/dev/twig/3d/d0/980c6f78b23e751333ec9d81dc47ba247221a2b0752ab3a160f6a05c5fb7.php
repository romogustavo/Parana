<?php

/* SpyTimelineBundle:Timeline:default.html.twig */
class __TwigTemplate_3dd0980c6f78b23e751333ec9d81dc47ba247221a2b0752ab3a160f6a05c5fb7 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "subject");
        echo "
-
";
        // line 3
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "verb");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SpyTimelineBundle:Timeline:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 1,);
    }
}
