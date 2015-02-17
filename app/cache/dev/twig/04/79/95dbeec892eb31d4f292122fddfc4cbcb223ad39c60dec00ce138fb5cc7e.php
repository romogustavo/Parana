<?php

/* SonataPageBundle:PageAdmin:compose_container_show.html.twig */
class __TwigTemplate_047995dbeec892eb31d4f292122fddfc4cbcb223ad39c60dec00ce138fb5cc7e extends Twig_Template
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
        echo "<div class=\"page-composer__container__view block-view-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "id", array()), "html", null, true);
        echo "\" data-block-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "id", array()), "html", null, true);
        echo "\">
    <h2 class=\"page-composer__container__view__header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "name", array()), "html", null, true);
        echo "</h2>

    <span class=\"page-composer__container__view__notice\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice", array(), "SonataPageBundle"), "html", null, true);
        echo "</span>

    <div class=\"page-composer__block-type-selector\">
        <label>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("composer.block.add.type", array(), "SonataPageBundle"), "html", null, true);
        echo "</label>
        <select class=\"page-composer__block-type-selector__select\" style=\"width: auto\">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockServices"]) ? $context["blockServices"] : $this->getContext($context, "blockServices")));
        foreach ($context['_seq'] as $context["blockServiceId"] => $context["blockService"]) {
            // line 10
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["blockServiceId"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockService"], "name", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockServiceId'], $context['blockService'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </select>
        <a class=\"btn btn-action btn-small page-composer__block-type-selector__confirm\"
           href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_block_create", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\"
        ><i class=\"fa fa-plus\"></i></a>
        <span class=\"page-composer__block-type-selector__loader\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("loading", array(), "SonataPageBundle"), "html", null, true);
        echo "</span>

        <small class=\"page-composer__container__child-count pull-right\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("blocks", array(), "SonataPageBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "children", array())), "html", null, true);
        echo "</span>
        </small>
    </div>

    <ul class=\"page-composer__container__children\">
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "            <li class=\"page-composer__container__child\"
                data-block-id=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
            echo "\" data-parent-block-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "id", array()), "html", null, true);
            echo "\"
            >
                <a class=\"page-composer__container__child__edit\"
                   href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_block_edit", array("id" => $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\"
                >
                    <h4>";
            // line 31
            echo twig_escape_filter($this->env, (($this->getAttribute($context["child"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["child"], "name", array()), $this->getAttribute($this->getAttribute((isset($context["blockServices"]) ? $context["blockServices"] : $this->getContext($context, "blockServices")), $this->getAttribute($context["child"], "type", array())), "name", array()))) : ($this->getAttribute($this->getAttribute((isset($context["blockServices"]) ? $context["blockServices"] : $this->getContext($context, "blockServices")), $this->getAttribute($context["child"], "type", array())), "name", array()))), "html", null, true);
            echo "</h4>
                    <small>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["blockServices"]) ? $context["blockServices"] : $this->getContext($context, "blockServices")), $this->getAttribute($context["child"], "type", array())), "name", array()), "html", null, true);
            echo "</small>
                    <span class=\"page-composer__container__child__toggle\">
                        <i class=\"fa fa-chevron-down\"></i>
                        <i class=\"fa fa-chevron-up\"></i>
                    </span>
                </a>

                <div class=\"page-composer__container__child__remove\">
                    <a class=\"badge\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_block_delete", array("id" => $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("composer.remove", array(), "SonataPageBundle"), "html", null, true);
            echo " <i class=\"fa fa-times\"></i> </a>
                    <span class=\"page-composer__container__child__remove__confirm\">
                        ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("composer.remove.confirm", array(), "SonataPageBundle"), "html", null, true);
            echo " <span class=\"yes\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("yes", array(), "SonataPageBundle"), "html", null, true);
            echo "</span> <span class=\"cancel\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cancel", array(), "SonataPageBundle"), "html", null, true);
            echo "</span>
                    </span>
                </div>

                <div class=\"page-composer__container__child__content\">
                </div>

                <div class=\"page-composer__container__child__loader\">
                    <span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("loading", array(), "SonataPageBundle"), "html", null, true);
            echo "</span>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:compose_container_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  139 => 50,  124 => 42,  117 => 40,  106 => 32,  102 => 31,  97 => 29,  89 => 26,  86 => 25,  82 => 24,  72 => 19,  66 => 16,  61 => 14,  57 => 12,  46 => 10,  42 => 9,  37 => 7,  31 => 4,  26 => 2,  19 => 1,);
    }
}
