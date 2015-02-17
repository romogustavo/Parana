<?php

/* SonataPageBundle:Exceptions:list.html.twig */
class __TwigTemplate_d6c27d0ce5d4097c0c954db74f4cfa13075630b79bc062d4c4a265e5f0c1d123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(11);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_list_exceptions", array(), "SonataPageBundle"), "html", null, true);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div>
        <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_list_exceptions", array(), "SonataPageBundle"), "html", null, true);
        echo "</h2>

        <ul>
            ";
        // line 20
        if ((isset($context["httpErrorCodes"]) ? $context["httpErrorCodes"] : $this->getContext($context, "httpErrorCodes"))) {
            // line 21
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["httpErrorCodes"]) ? $context["httpErrorCodes"] : $this->getContext($context, "httpErrorCodes")));
            foreach ($context['_seq'] as $context["code"] => $context["page"]) {
                // line 22
                echo "                    <li>
                        <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_page_exceptions_edit", array("code" => $context["code"])), "html", null, true);
                echo "\">
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("manage_exception", array("%code%" => $context["code"]), "SonataPageBundle"), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Exceptions:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  79 => 28,  69 => 24,  65 => 23,  62 => 22,  57 => 21,  55 => 20,  49 => 17,  46 => 16,  43 => 15,  37 => 13,  11 => 11,);
    }
}
