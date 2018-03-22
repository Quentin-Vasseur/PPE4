<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_57f0fe9e82f9df80022ccd9891730a1d51613bd6e1b6cba0785b208ae2661e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9f5943e4affc8e2a8e7009bed6c006022023f27cfe6306da6d39890dd51d7380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5943e4affc8e2a8e7009bed6c006022023f27cfe6306da6d39890dd51d7380->enter($__internal_9f5943e4affc8e2a8e7009bed6c006022023f27cfe6306da6d39890dd51d7380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_da676be035d84360025c26a848e19e3b670994835e6d66d8d73e92a762d63455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da676be035d84360025c26a848e19e3b670994835e6d66d8d73e92a762d63455->enter($__internal_da676be035d84360025c26a848e19e3b670994835e6d66d8d73e92a762d63455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5943e4affc8e2a8e7009bed6c006022023f27cfe6306da6d39890dd51d7380->leave($__internal_9f5943e4affc8e2a8e7009bed6c006022023f27cfe6306da6d39890dd51d7380_prof);

        
        $__internal_da676be035d84360025c26a848e19e3b670994835e6d66d8d73e92a762d63455->leave($__internal_da676be035d84360025c26a848e19e3b670994835e6d66d8d73e92a762d63455_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6cb315e3eeb81fab93e1e7230c250a462253c8f5faf98c2e7f35511cb1e34ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cb315e3eeb81fab93e1e7230c250a462253c8f5faf98c2e7f35511cb1e34ee->enter($__internal_f6cb315e3eeb81fab93e1e7230c250a462253c8f5faf98c2e7f35511cb1e34ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c92fc6fc4cdea64612ad77ff3d9cf1ecea28ead60fb048394670393d72eaff65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92fc6fc4cdea64612ad77ff3d9cf1ecea28ead60fb048394670393d72eaff65->enter($__internal_c92fc6fc4cdea64612ad77ff3d9cf1ecea28ead60fb048394670393d72eaff65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c92fc6fc4cdea64612ad77ff3d9cf1ecea28ead60fb048394670393d72eaff65->leave($__internal_c92fc6fc4cdea64612ad77ff3d9cf1ecea28ead60fb048394670393d72eaff65_prof);

        
        $__internal_f6cb315e3eeb81fab93e1e7230c250a462253c8f5faf98c2e7f35511cb1e34ee->leave($__internal_f6cb315e3eeb81fab93e1e7230c250a462253c8f5faf98c2e7f35511cb1e34ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4140fccee314dff1dd3d0026a550035941f2abf497b4ba50b590b3adffa02fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4140fccee314dff1dd3d0026a550035941f2abf497b4ba50b590b3adffa02fd->enter($__internal_a4140fccee314dff1dd3d0026a550035941f2abf497b4ba50b590b3adffa02fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a4700e8caa326b06097260a6e628514d923f4864c33e83361fd2aa215ab08640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4700e8caa326b06097260a6e628514d923f4864c33e83361fd2aa215ab08640->enter($__internal_a4700e8caa326b06097260a6e628514d923f4864c33e83361fd2aa215ab08640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a4700e8caa326b06097260a6e628514d923f4864c33e83361fd2aa215ab08640->leave($__internal_a4700e8caa326b06097260a6e628514d923f4864c33e83361fd2aa215ab08640_prof);

        
        $__internal_a4140fccee314dff1dd3d0026a550035941f2abf497b4ba50b590b3adffa02fd->leave($__internal_a4140fccee314dff1dd3d0026a550035941f2abf497b4ba50b590b3adffa02fd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5e7ea2fca293a2590cc14e5c6565da3f951de3d4262e872aea274a050f74341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e7ea2fca293a2590cc14e5c6565da3f951de3d4262e872aea274a050f74341->enter($__internal_b5e7ea2fca293a2590cc14e5c6565da3f951de3d4262e872aea274a050f74341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27c4116ec64faadc18f15c24d8cc2751a4f331b62af82fe82601a4b7abfea232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c4116ec64faadc18f15c24d8cc2751a4f331b62af82fe82601a4b7abfea232->enter($__internal_27c4116ec64faadc18f15c24d8cc2751a4f331b62af82fe82601a4b7abfea232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_27c4116ec64faadc18f15c24d8cc2751a4f331b62af82fe82601a4b7abfea232->leave($__internal_27c4116ec64faadc18f15c24d8cc2751a4f331b62af82fe82601a4b7abfea232_prof);

        
        $__internal_b5e7ea2fca293a2590cc14e5c6565da3f951de3d4262e872aea274a050f74341->leave($__internal_b5e7ea2fca293a2590cc14e5c6565da3f951de3d4262e872aea274a050f74341_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
