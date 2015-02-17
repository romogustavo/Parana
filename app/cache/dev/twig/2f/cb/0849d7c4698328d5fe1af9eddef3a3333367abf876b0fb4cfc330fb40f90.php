<?php

/* SonataPageBundle:Page:breadcrumb.html.twig */
class __TwigTemplate_2fcb0849d7c4698328d5fe1af9eddef3a3333367abf876b0fb4cfc330fb40f90 extends Twig_Template
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
        echo "
";
        // line 12
        if ((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs"))) {
            // line 13
            echo "    <ul ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "container_attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 15
                echo "            ";
                if ( !$this->getAttribute($context["breadcrumb"], "isdynamic", array())) {
                    // line 16
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath($context["breadcrumb"]);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
                    echo "</a>";
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "separator", array());
                    echo "</li>
            ";
                } else {
                    // line 18
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "separator", array());
                    echo "</li>
            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "isdynamic", array())) {
                // line 22
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "current_class", array()), "html", null, true);
                echo "\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
                echo "</a>";
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "last_separator", array());
                echo "</li>
        ";
            } else {
                // line 24
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "current_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "last_separator", array());
                echo "</li>
        ";
            }
            // line 26
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Page:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  88 => 24,  74 => 22,  71 => 21,  65 => 20,  58 => 18,  46 => 16,  43 => 15,  39 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }
}
