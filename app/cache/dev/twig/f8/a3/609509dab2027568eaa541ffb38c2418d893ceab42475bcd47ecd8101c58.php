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
        echo "
";
        // line 3
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e029b99_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e029b99_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/hide_hide_1.js");
            // line 4
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "e029b99"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e029b99") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/hide.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 6
        echo "

";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<ul style=\"list-style-type: none\">
";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TasksList"]) ? $context["TasksList"] : $this->getContext($context, "TasksList")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            echo "  
    ";
            // line 14
            if (($this->getAttribute($context["task"], "complete", array()) == 1)) {
                // line 15
                echo "    <li class='checked'>
    ";
            } else {
                // line 17
                echo "    <li class='unchecked'>
    ";
            }
            // line 19
            echo "
    <div style=\"display:inline\" onclick=\"location.href='../markcomplete/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "'\";>
    ";
            // line 21
            if (($this->getAttribute($context["task"], "complete", array()) == 1)) {
                // line 22
                echo "        <input type=checkbox checked>
    ";
            } else {
                // line 24
                echo "        <input type=checkbox>
    ";
            }
            // line 26
            echo "    </div>
    <div style=\"display:inline\" onclick=\"location.href='../update/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "'\";>
    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "
    </div>
    <div style=\"display:inline\" onclick=\"location.href='../deletetask/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "'\";>
    ";
            // line 31
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "7ef13eb_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ef13eb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/delete_delete_1.png");
                // line 32
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"my alt of image\" class=\"pull-left\">
    ";
            } else {
                // asset "7ef13eb"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ef13eb") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/delete.png");
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\"  alt=\"my alt of image\" class=\"pull-left\">
    ";
            }
            unset($context["asset_url"]);
            // line 34
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</ul>
<BR>
<div style=\"cursor : pointer\" onclick=\"location.href='../deletecompleted'\";>
<font color=red>
Delete completed tasks</font></div>
<div text-align:center;>
<div style=\"cursor : pointer\" onclick='showAll()'>Show All</div>
<div style=\"cursor : pointer\" onclick='showChecked()'>Show Checked</div>
<div style=\"cursor : pointer\" onclick='showUnchecked()'>Show Unchecked</div>
</div>

<BR>

Notes:
<ul>
<li>Click on task to modify
<li>Go to localhost:8000/config.php to configure MySQL
</ul>

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
        return array (  132 => 36,  125 => 34,  111 => 32,  107 => 31,  103 => 30,  98 => 28,  94 => 27,  91 => 26,  87 => 24,  83 => 22,  81 => 21,  77 => 20,  74 => 19,  70 => 17,  66 => 15,  64 => 14,  58 => 13,  52 => 10,  48 => 9,  44 => 8,  40 => 6,  26 => 4,  22 => 3,  19 => 2,);
    }
}
