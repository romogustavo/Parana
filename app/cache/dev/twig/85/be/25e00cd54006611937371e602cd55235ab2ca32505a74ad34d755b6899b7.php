<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_85be25e00cd54006611937371e602cd55235ab2ca32505a74ad34d755b6899b7 extends Twig_Template
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
        echo "
";
    }

    // line 2
    public function getrender_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "
    ";
            // line 4
            if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
                echo "<div class=\"row\">";
            }
            // line 5
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 6
                echo "        ";
                $context["form_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formgroups", array()), $context["code"], array(), "array");
                // line 7
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "class", array()), "html", null, true);
                echo "\"> ";
                // line 8
                echo "            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "translation_domain", array())), "method"), "html", null, true);
                echo "
                    </h4>
                </div>
                ";
                // line 15
                echo "                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 17
                if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array()) != false)) {
                    // line 18
                    echo "                            <p>";
                    echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "description", array());
                    echo "</p>
                        ";
                }
                // line 20
                echo "
                        ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : $this->getContext($context, "form_group")), "fields", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 22
                    echo "                            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                        // line 23
                        echo "
                                ";
                        // line 24
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field_name"], array(), "array"), 'row');
                        echo " ";
                        // line 25
                        echo "
                            ";
                    }
                    // line 27
                    echo "                        
                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 29
                    echo "                            <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</em>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    </div>
                </div>
                ";
                // line 34
                echo "            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
            if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
                echo "</div>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 37,  120 => 34,  116 => 31,  107 => 29,  101 => 27,  97 => 25,  94 => 24,  91 => 23,  88 => 22,  83 => 21,  80 => 20,  74 => 18,  72 => 17,  68 => 15,  62 => 11,  57 => 8,  53 => 7,  50 => 6,  45 => 5,  41 => 4,  38 => 3,  24 => 2,  19 => 1,);
    }
}
