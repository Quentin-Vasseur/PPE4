<?php

/* PPE4TobatBundle::layout.html.twig */
class __TwigTemplate_2c1f9ad940ad90d4417472b0442c64076c3cc5b1265a8ca1581bd4accb4548a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "PPE4TobatBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'Sioblog_body' => array($this, 'block_Sioblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d0384d5a89a5a709777b76232351408f9f422200160752c57a8a086b5468fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0384d5a89a5a709777b76232351408f9f422200160752c57a8a086b5468fe3->enter($__internal_7d0384d5a89a5a709777b76232351408f9f422200160752c57a8a086b5468fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPE4TobatBundle::layout.html.twig"));

        $__internal_6b47d6b4d6b0ed47084f7e6969129e8b897623f396a7a34ac2db250d2aa15a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b47d6b4d6b0ed47084f7e6969129e8b897623f396a7a34ac2db250d2aa15a80->enter($__internal_6b47d6b4d6b0ed47084f7e6969129e8b897623f396a7a34ac2db250d2aa15a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPE4TobatBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d0384d5a89a5a709777b76232351408f9f422200160752c57a8a086b5468fe3->leave($__internal_7d0384d5a89a5a709777b76232351408f9f422200160752c57a8a086b5468fe3_prof);

        
        $__internal_6b47d6b4d6b0ed47084f7e6969129e8b897623f396a7a34ac2db250d2aa15a80->leave($__internal_6b47d6b4d6b0ed47084f7e6969129e8b897623f396a7a34ac2db250d2aa15a80_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6744e4219592104fde85c8ab1c279903aec951154084d0d899805d84911e9e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6744e4219592104fde85c8ab1c279903aec951154084d0d899805d84911e9e4a->enter($__internal_6744e4219592104fde85c8ab1c279903aec951154084d0d899805d84911e9e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d00191da22a9f44c1710debdf37352223fcf6e1b5e6a11992cafd4d980301e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00191da22a9f44c1710debdf37352223fcf6e1b5e6a11992cafd4d980301e88->enter($__internal_d00191da22a9f44c1710debdf37352223fcf6e1b5e6a11992cafd4d980301e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d00191da22a9f44c1710debdf37352223fcf6e1b5e6a11992cafd4d980301e88->leave($__internal_d00191da22a9f44c1710debdf37352223fcf6e1b5e6a11992cafd4d980301e88_prof);

        
        $__internal_6744e4219592104fde85c8ab1c279903aec951154084d0d899805d84911e9e4a->leave($__internal_6744e4219592104fde85c8ab1c279903aec951154084d0d899805d84911e9e4a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc08f117e330472810a8d68d350f8268a8ddcb7ec7071c545b45d33a6ae845f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc08f117e330472810a8d68d350f8268a8ddcb7ec7071c545b45d33a6ae845f0->enter($__internal_dc08f117e330472810a8d68d350f8268a8ddcb7ec7071c545b45d33a6ae845f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a42cc9f88dd8c1a4f7f449bbaff708396c7f43bcce8ced43237ece8131ab845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a42cc9f88dd8c1a4f7f449bbaff708396c7f43bcce8ced43237ece8131ab845->enter($__internal_5a42cc9f88dd8c1a4f7f449bbaff708396c7f43bcce8ced43237ece8131ab845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Articles</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('Sioblog_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_5a42cc9f88dd8c1a4f7f449bbaff708396c7f43bcce8ced43237ece8131ab845->leave($__internal_5a42cc9f88dd8c1a4f7f449bbaff708396c7f43bcce8ced43237ece8131ab845_prof);

        
        $__internal_dc08f117e330472810a8d68d350f8268a8ddcb7ec7071c545b45d33a6ae845f0->leave($__internal_dc08f117e330472810a8d68d350f8268a8ddcb7ec7071c545b45d33a6ae845f0_prof);

    }

    // line 17
    public function block_Sioblog_body($context, array $blocks = array())
    {
        $__internal_9300c98a2ff3e24a2074e66dc9cdbd646df8a77dcbcf1fe14bc2748503dde9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9300c98a2ff3e24a2074e66dc9cdbd646df8a77dcbcf1fe14bc2748503dde9f6->enter($__internal_9300c98a2ff3e24a2074e66dc9cdbd646df8a77dcbcf1fe14bc2748503dde9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        $__internal_4693b4662d557b81756b849ae162aabab140d4d57f07a60d3a7aa512cfa8ea73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4693b4662d557b81756b849ae162aabab140d4d57f07a60d3a7aa512cfa8ea73->enter($__internal_4693b4662d557b81756b849ae162aabab140d4d57f07a60d3a7aa512cfa8ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        // line 18
        echo "  ";
        
        $__internal_4693b4662d557b81756b849ae162aabab140d4d57f07a60d3a7aa512cfa8ea73->leave($__internal_4693b4662d557b81756b849ae162aabab140d4d57f07a60d3a7aa512cfa8ea73_prof);

        
        $__internal_9300c98a2ff3e24a2074e66dc9cdbd646df8a77dcbcf1fe14bc2748503dde9f6->leave($__internal_9300c98a2ff3e24a2074e66dc9cdbd646df8a77dcbcf1fe14bc2748503dde9f6_prof);

    }

    public function getTemplateName()
    {
        return "PPE4TobatBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/PPE4/TobatBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Articles</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block Sioblog_body %}
  {% endblock %}

{% endblock %}", "PPE4TobatBundle::layout.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\src\\PPE4\\TobatBundle/Resources/views/layout.html.twig");
    }
}
