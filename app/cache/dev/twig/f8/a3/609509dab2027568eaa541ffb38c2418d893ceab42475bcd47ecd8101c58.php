<?php

/* default/show.html.twig */
class __TwigTemplate_f8a3609509dab2027568eaa541ffb38c2418d893ceab42475bcd47ecd8101c58 extends Twig_Template
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
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<table>
<th colspan=3>Task</th>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TasksList"]) ? $context["TasksList"] : $this->getContext($context, "TasksList")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            echo "  
    <tr>
    <td><div onclick=\"location.href='../markcomplete/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "'\";>
    ";
            // line 11
            if (($this->getAttribute($context["task"], "complete", array()) == 1)) {
                // line 12
                echo "        <input type=checkbox checked>
    ";
            } else {
                // line 14
                echo "        <input type=checkbox>
    ";
            }
            // line 16
            echo "    </div></td>
    <td><div onclick=\"location.href='../update/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "'\";>
    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "
    </div></td>
    <td><div onclick=\"location.href='../deletetask/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "'\";>
    ";
            // line 21
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "7ef13eb_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ef13eb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/delete_delete_1.png");
                // line 22
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" alt=\"my alt of image\" class=\"pull-left\">
    ";
            } else {
                // asset "7ef13eb"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ef13eb") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/delete.png");
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" alt=\"my alt of image\" class=\"pull-left\">
    ";
            }
            unset($context["asset_url"]);
            // line 24
            echo "    </div></td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
<BR>
<div onclick=\"location.href='../deletecompleted'\";>Delete completed tasks</div>
";
    }

    public function getTemplateName()
    {
        return "default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  89 => 24,  75 => 22,  71 => 21,  67 => 20,  62 => 18,  58 => 17,  55 => 16,  51 => 14,  47 => 12,  45 => 11,  41 => 10,  34 => 8,  27 => 4,  23 => 3,  19 => 2,);
    }
}
