<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_28cd0f52b3a6454dd1536ac1596d5d371093faadfb902477942690e194adebee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfd24b057be203dec775a32aca6de0613d8eb12a24e0514b79afaf6cd2c2246d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd24b057be203dec775a32aca6de0613d8eb12a24e0514b79afaf6cd2c2246d->enter($__internal_dfd24b057be203dec775a32aca6de0613d8eb12a24e0514b79afaf6cd2c2246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_baf08c709885e11d97b042c7a75d6c9cb9a44af436b005116bac0f164965e6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf08c709885e11d97b042c7a75d6c9cb9a44af436b005116bac0f164965e6e5->enter($__internal_baf08c709885e11d97b042c7a75d6c9cb9a44af436b005116bac0f164965e6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd24b057be203dec775a32aca6de0613d8eb12a24e0514b79afaf6cd2c2246d->leave($__internal_dfd24b057be203dec775a32aca6de0613d8eb12a24e0514b79afaf6cd2c2246d_prof);

        
        $__internal_baf08c709885e11d97b042c7a75d6c9cb9a44af436b005116bac0f164965e6e5->leave($__internal_baf08c709885e11d97b042c7a75d6c9cb9a44af436b005116bac0f164965e6e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18215a33f1b0a41a8e869968372a12507a26c0c60da985c19f67f5f21098979c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18215a33f1b0a41a8e869968372a12507a26c0c60da985c19f67f5f21098979c->enter($__internal_18215a33f1b0a41a8e869968372a12507a26c0c60da985c19f67f5f21098979c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c09222e9b4a04e1b1bcb85191bab8ac90bd219894ecb6d9a46b4bc83c18f1f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09222e9b4a04e1b1bcb85191bab8ac90bd219894ecb6d9a46b4bc83c18f1f58->enter($__internal_c09222e9b4a04e1b1bcb85191bab8ac90bd219894ecb6d9a46b4bc83c18f1f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c09222e9b4a04e1b1bcb85191bab8ac90bd219894ecb6d9a46b4bc83c18f1f58->leave($__internal_c09222e9b4a04e1b1bcb85191bab8ac90bd219894ecb6d9a46b4bc83c18f1f58_prof);

        
        $__internal_18215a33f1b0a41a8e869968372a12507a26c0c60da985c19f67f5f21098979c->leave($__internal_18215a33f1b0a41a8e869968372a12507a26c0c60da985c19f67f5f21098979c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
