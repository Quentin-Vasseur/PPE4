<?php

/* PPE4TobatBundle:Default:index.html.twig */
class __TwigTemplate_5422ad0ffb02bbdb9f2d345931f313932f5f219a7c5dcea3c8a17cd6464e4680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("PPE4TobatBundle::layout.html.twig", "PPE4TobatBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Sioblog_body' => array($this, 'block_Sioblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PPE4TobatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9a47cfb25ccf1be2f8abcf333fbde81a0d302a3d8afcc7c000ca0e0eddddcbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a47cfb25ccf1be2f8abcf333fbde81a0d302a3d8afcc7c000ca0e0eddddcbe->enter($__internal_c9a47cfb25ccf1be2f8abcf333fbde81a0d302a3d8afcc7c000ca0e0eddddcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPE4TobatBundle:Default:index.html.twig"));

        $__internal_3b1fe624833ed5f4b2eb917c9348d5cf1f09d43679be4259de7dc0cd6732646f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1fe624833ed5f4b2eb917c9348d5cf1f09d43679be4259de7dc0cd6732646f->enter($__internal_3b1fe624833ed5f4b2eb917c9348d5cf1f09d43679be4259de7dc0cd6732646f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PPE4TobatBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9a47cfb25ccf1be2f8abcf333fbde81a0d302a3d8afcc7c000ca0e0eddddcbe->leave($__internal_c9a47cfb25ccf1be2f8abcf333fbde81a0d302a3d8afcc7c000ca0e0eddddcbe_prof);

        
        $__internal_3b1fe624833ed5f4b2eb917c9348d5cf1f09d43679be4259de7dc0cd6732646f->leave($__internal_3b1fe624833ed5f4b2eb917c9348d5cf1f09d43679be4259de7dc0cd6732646f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_615a59faf372f25d7d18f99c3bdf47d22b948bea741045830ab119f4f7a996a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615a59faf372f25d7d18f99c3bdf47d22b948bea741045830ab119f4f7a996a3->enter($__internal_615a59faf372f25d7d18f99c3bdf47d22b948bea741045830ab119f4f7a996a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23bfa8add9c14c3535f8abc68f3072844b17122ffde59bd106c1593102e85ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bfa8add9c14c3535f8abc68f3072844b17122ffde59bd106c1593102e85ba5->enter($__internal_23bfa8add9c14c3535f8abc68f3072844b17122ffde59bd106c1593102e85ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_23bfa8add9c14c3535f8abc68f3072844b17122ffde59bd106c1593102e85ba5->leave($__internal_23bfa8add9c14c3535f8abc68f3072844b17122ffde59bd106c1593102e85ba5_prof);

        
        $__internal_615a59faf372f25d7d18f99c3bdf47d22b948bea741045830ab119f4f7a996a3->leave($__internal_615a59faf372f25d7d18f99c3bdf47d22b948bea741045830ab119f4f7a996a3_prof);

    }

    // line 9
    public function block_Sioblog_body($context, array $blocks = array())
    {
        $__internal_8fe6a0e72ccb9326521f1a5a12c3c5cba41fa009e814cbdcfb6a4f3e2da7ece7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe6a0e72ccb9326521f1a5a12c3c5cba41fa009e814cbdcfb6a4f3e2da7ece7->enter($__internal_8fe6a0e72ccb9326521f1a5a12c3c5cba41fa009e814cbdcfb6a4f3e2da7ece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        $__internal_665028b95c500fcf42a52ebc182446d0530523a6dea46621965278d91181f36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665028b95c500fcf42a52ebc182446d0530523a6dea46621965278d91181f36d->enter($__internal_665028b95c500fcf42a52ebc182446d0530523a6dea46621965278d91181f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sioblog_body"));

        // line 10
        echo "
\t<h2>Gestion de la base de données</h2>

";
        
        $__internal_665028b95c500fcf42a52ebc182446d0530523a6dea46621965278d91181f36d->leave($__internal_665028b95c500fcf42a52ebc182446d0530523a6dea46621965278d91181f36d_prof);

        
        $__internal_8fe6a0e72ccb9326521f1a5a12c3c5cba41fa009e814cbdcfb6a4f3e2da7ece7->leave($__internal_8fe6a0e72ccb9326521f1a5a12c3c5cba41fa009e814cbdcfb6a4f3e2da7ece7_prof);

    }

    public function getTemplateName()
    {
        return "PPE4TobatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/PPE-4/TobatBundle/Resources/views/Tobat/index.html.twig #}

{% extends \"PPE4TobatBundle::layout.html.twig\" %}

{% block title %}
\tAccueil - {{ parent() }}
{% endblock %}

{% block Sioblog_body %}

\t<h2>Gestion de la base de données</h2>

{% endblock %}
     ", "PPE4TobatBundle:Default:index.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\src\\PPE4\\TobatBundle/Resources/views/Default/index.html.twig");
    }
}
