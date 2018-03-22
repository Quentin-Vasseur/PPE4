<?php

/* base.html.twig */
class __TwigTemplate_94da0c3e03a140e587aa6ec002167b86ed155f080c790e0a3c1af36bcd86ab94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26057a31619a508166bb6a2361661ed5870689f645123692d500ed4832e3b4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26057a31619a508166bb6a2361661ed5870689f645123692d500ed4832e3b4ed->enter($__internal_26057a31619a508166bb6a2361661ed5870689f645123692d500ed4832e3b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_927df843673e3cc4705bb60cbf51b27d0f0b3ca6ce645394415695f28f7aaaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927df843673e3cc4705bb60cbf51b27d0f0b3ca6ce645394415695f28f7aaaa5->enter($__internal_927df843673e3cc4705bb60cbf51b27d0f0b3ca6ce645394415695f28f7aaaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_26057a31619a508166bb6a2361661ed5870689f645123692d500ed4832e3b4ed->leave($__internal_26057a31619a508166bb6a2361661ed5870689f645123692d500ed4832e3b4ed_prof);

        
        $__internal_927df843673e3cc4705bb60cbf51b27d0f0b3ca6ce645394415695f28f7aaaa5->leave($__internal_927df843673e3cc4705bb60cbf51b27d0f0b3ca6ce645394415695f28f7aaaa5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b09aa86e4d3b78f761813f86a9e3a4632222f86f6cf10f3d9c462cf685b8b081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09aa86e4d3b78f761813f86a9e3a4632222f86f6cf10f3d9c462cf685b8b081->enter($__internal_b09aa86e4d3b78f761813f86a9e3a4632222f86f6cf10f3d9c462cf685b8b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dac3697f59304b0b1415866743478aa031f6d14891372a7108a64c63b58e0fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac3697f59304b0b1415866743478aa031f6d14891372a7108a64c63b58e0fa0->enter($__internal_dac3697f59304b0b1415866743478aa031f6d14891372a7108a64c63b58e0fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dac3697f59304b0b1415866743478aa031f6d14891372a7108a64c63b58e0fa0->leave($__internal_dac3697f59304b0b1415866743478aa031f6d14891372a7108a64c63b58e0fa0_prof);

        
        $__internal_b09aa86e4d3b78f761813f86a9e3a4632222f86f6cf10f3d9c462cf685b8b081->leave($__internal_b09aa86e4d3b78f761813f86a9e3a4632222f86f6cf10f3d9c462cf685b8b081_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d0df4cb589078bd8772eb2cd62565718b381567589ed2fba1069467e042e3f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0df4cb589078bd8772eb2cd62565718b381567589ed2fba1069467e042e3f6->enter($__internal_7d0df4cb589078bd8772eb2cd62565718b381567589ed2fba1069467e042e3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d76c74baca94093134bf6a280fcdfe8dd7ee0b8f69b0dff11bba864d6631b25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76c74baca94093134bf6a280fcdfe8dd7ee0b8f69b0dff11bba864d6631b25a->enter($__internal_d76c74baca94093134bf6a280fcdfe8dd7ee0b8f69b0dff11bba864d6631b25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d76c74baca94093134bf6a280fcdfe8dd7ee0b8f69b0dff11bba864d6631b25a->leave($__internal_d76c74baca94093134bf6a280fcdfe8dd7ee0b8f69b0dff11bba864d6631b25a_prof);

        
        $__internal_7d0df4cb589078bd8772eb2cd62565718b381567589ed2fba1069467e042e3f6->leave($__internal_7d0df4cb589078bd8772eb2cd62565718b381567589ed2fba1069467e042e3f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ed389572422cb524f25e84d78a7cde48ff178619cb0d9efe1a8d4fb98bb2a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed389572422cb524f25e84d78a7cde48ff178619cb0d9efe1a8d4fb98bb2a62->enter($__internal_5ed389572422cb524f25e84d78a7cde48ff178619cb0d9efe1a8d4fb98bb2a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33d24d3423b23d9d84899a9cf9756c78d4de32db209d62cb95aa6929e150110b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d24d3423b23d9d84899a9cf9756c78d4de32db209d62cb95aa6929e150110b->enter($__internal_33d24d3423b23d9d84899a9cf9756c78d4de32db209d62cb95aa6929e150110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33d24d3423b23d9d84899a9cf9756c78d4de32db209d62cb95aa6929e150110b->leave($__internal_33d24d3423b23d9d84899a9cf9756c78d4de32db209d62cb95aa6929e150110b_prof);

        
        $__internal_5ed389572422cb524f25e84d78a7cde48ff178619cb0d9efe1a8d4fb98bb2a62->leave($__internal_5ed389572422cb524f25e84d78a7cde48ff178619cb0d9efe1a8d4fb98bb2a62_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8280c18a96ce37b1c3433487edf964b7ac7d2d7a95e73bb2e379a16af8cc4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8280c18a96ce37b1c3433487edf964b7ac7d2d7a95e73bb2e379a16af8cc4f0->enter($__internal_e8280c18a96ce37b1c3433487edf964b7ac7d2d7a95e73bb2e379a16af8cc4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_003299fd7a1f1437ef9a676ed2d14fa69ab2cd09c998b21cb763063f877ff6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003299fd7a1f1437ef9a676ed2d14fa69ab2cd09c998b21cb763063f877ff6ab->enter($__internal_003299fd7a1f1437ef9a676ed2d14fa69ab2cd09c998b21cb763063f877ff6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_003299fd7a1f1437ef9a676ed2d14fa69ab2cd09c998b21cb763063f877ff6ab->leave($__internal_003299fd7a1f1437ef9a676ed2d14fa69ab2cd09c998b21cb763063f877ff6ab_prof);

        
        $__internal_e8280c18a96ce37b1c3433487edf964b7ac7d2d7a95e73bb2e379a16af8cc4f0->leave($__internal_e8280c18a96ce37b1c3433487edf964b7ac7d2d7a95e73bb2e379a16af8cc4f0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
