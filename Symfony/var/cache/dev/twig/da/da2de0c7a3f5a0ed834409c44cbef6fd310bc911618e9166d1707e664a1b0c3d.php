<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d872a3466c96359f7cd0df564b780be741be7df4252b62eb827fd25e7443c994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b85c8f382529e83ced7ab5ac14508d193499f4cc3126d9d8458025ea40d86f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85c8f382529e83ced7ab5ac14508d193499f4cc3126d9d8458025ea40d86f1e->enter($__internal_b85c8f382529e83ced7ab5ac14508d193499f4cc3126d9d8458025ea40d86f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1b573ab989cebd2008d97996c8fa81880f1f8347b999c2b72e32d4ea42a761e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b573ab989cebd2008d97996c8fa81880f1f8347b999c2b72e32d4ea42a761e2->enter($__internal_1b573ab989cebd2008d97996c8fa81880f1f8347b999c2b72e32d4ea42a761e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85c8f382529e83ced7ab5ac14508d193499f4cc3126d9d8458025ea40d86f1e->leave($__internal_b85c8f382529e83ced7ab5ac14508d193499f4cc3126d9d8458025ea40d86f1e_prof);

        
        $__internal_1b573ab989cebd2008d97996c8fa81880f1f8347b999c2b72e32d4ea42a761e2->leave($__internal_1b573ab989cebd2008d97996c8fa81880f1f8347b999c2b72e32d4ea42a761e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4be077b17f87155caa0f175ee5b21b75326c47d08021155bc5298446647c9ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be077b17f87155caa0f175ee5b21b75326c47d08021155bc5298446647c9ea0->enter($__internal_4be077b17f87155caa0f175ee5b21b75326c47d08021155bc5298446647c9ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d3e540d7cccbb3fdcc0b761c858113bd67b6cada6d231fc74984d84617a27bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e540d7cccbb3fdcc0b761c858113bd67b6cada6d231fc74984d84617a27bcf->enter($__internal_d3e540d7cccbb3fdcc0b761c858113bd67b6cada6d231fc74984d84617a27bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3e540d7cccbb3fdcc0b761c858113bd67b6cada6d231fc74984d84617a27bcf->leave($__internal_d3e540d7cccbb3fdcc0b761c858113bd67b6cada6d231fc74984d84617a27bcf_prof);

        
        $__internal_4be077b17f87155caa0f175ee5b21b75326c47d08021155bc5298446647c9ea0->leave($__internal_4be077b17f87155caa0f175ee5b21b75326c47d08021155bc5298446647c9ea0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2a62621622f52c57b6d8b3794b263d1d95ed90766e9736dedb410fa649a4004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a62621622f52c57b6d8b3794b263d1d95ed90766e9736dedb410fa649a4004->enter($__internal_b2a62621622f52c57b6d8b3794b263d1d95ed90766e9736dedb410fa649a4004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b422ca55a26c5e40d8284719e57d4d926b76a62c6f028b4e2642260712cf3fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b422ca55a26c5e40d8284719e57d4d926b76a62c6f028b4e2642260712cf3fd2->enter($__internal_b422ca55a26c5e40d8284719e57d4d926b76a62c6f028b4e2642260712cf3fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b422ca55a26c5e40d8284719e57d4d926b76a62c6f028b4e2642260712cf3fd2->leave($__internal_b422ca55a26c5e40d8284719e57d4d926b76a62c6f028b4e2642260712cf3fd2_prof);

        
        $__internal_b2a62621622f52c57b6d8b3794b263d1d95ed90766e9736dedb410fa649a4004->leave($__internal_b2a62621622f52c57b6d8b3794b263d1d95ed90766e9736dedb410fa649a4004_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d22a8cbb04c5bc50b4ed7d6f4a66d638ba3b7ff4d06e347e0772c12b32d3efb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22a8cbb04c5bc50b4ed7d6f4a66d638ba3b7ff4d06e347e0772c12b32d3efb5->enter($__internal_d22a8cbb04c5bc50b4ed7d6f4a66d638ba3b7ff4d06e347e0772c12b32d3efb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1afe7f17916357bf379652e4512f0ab81f2f8ab8a01baf5c0ffad4bf7dd76e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afe7f17916357bf379652e4512f0ab81f2f8ab8a01baf5c0ffad4bf7dd76e11->enter($__internal_1afe7f17916357bf379652e4512f0ab81f2f8ab8a01baf5c0ffad4bf7dd76e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1afe7f17916357bf379652e4512f0ab81f2f8ab8a01baf5c0ffad4bf7dd76e11->leave($__internal_1afe7f17916357bf379652e4512f0ab81f2f8ab8a01baf5c0ffad4bf7dd76e11_prof);

        
        $__internal_d22a8cbb04c5bc50b4ed7d6f4a66d638ba3b7ff4d06e347e0772c12b32d3efb5->leave($__internal_d22a8cbb04c5bc50b4ed7d6f4a66d638ba3b7ff4d06e347e0772c12b32d3efb5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
