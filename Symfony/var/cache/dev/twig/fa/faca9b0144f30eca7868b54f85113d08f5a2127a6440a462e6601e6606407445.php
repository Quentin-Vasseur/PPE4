<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8acc11fab5d88d97ef5559183c4b561dcfab21c1c04cdc46ee3a1b291dc02208 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89d5b3a78a2a544df7f4207cc7c8363ad9d5774bc6045b64ae611763d259f7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d5b3a78a2a544df7f4207cc7c8363ad9d5774bc6045b64ae611763d259f7fe->enter($__internal_89d5b3a78a2a544df7f4207cc7c8363ad9d5774bc6045b64ae611763d259f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dc92e37520b2bfe14cc3337386a5e732ec9debeb90c2e6000008c3c76137a30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc92e37520b2bfe14cc3337386a5e732ec9debeb90c2e6000008c3c76137a30a->enter($__internal_dc92e37520b2bfe14cc3337386a5e732ec9debeb90c2e6000008c3c76137a30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_89d5b3a78a2a544df7f4207cc7c8363ad9d5774bc6045b64ae611763d259f7fe->leave($__internal_89d5b3a78a2a544df7f4207cc7c8363ad9d5774bc6045b64ae611763d259f7fe_prof);

        
        $__internal_dc92e37520b2bfe14cc3337386a5e732ec9debeb90c2e6000008c3c76137a30a->leave($__internal_dc92e37520b2bfe14cc3337386a5e732ec9debeb90c2e6000008c3c76137a30a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_253090184716c80bac9bc6037f96d2832f091fb921120423b408e3b37e567bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253090184716c80bac9bc6037f96d2832f091fb921120423b408e3b37e567bd5->enter($__internal_253090184716c80bac9bc6037f96d2832f091fb921120423b408e3b37e567bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8af7151ef5ea91ed1c571162e23ec17364c24d678fcd1af501294b3cc7967cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8af7151ef5ea91ed1c571162e23ec17364c24d678fcd1af501294b3cc7967cd->enter($__internal_e8af7151ef5ea91ed1c571162e23ec17364c24d678fcd1af501294b3cc7967cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e8af7151ef5ea91ed1c571162e23ec17364c24d678fcd1af501294b3cc7967cd->leave($__internal_e8af7151ef5ea91ed1c571162e23ec17364c24d678fcd1af501294b3cc7967cd_prof);

        
        $__internal_253090184716c80bac9bc6037f96d2832f091fb921120423b408e3b37e567bd5->leave($__internal_253090184716c80bac9bc6037f96d2832f091fb921120423b408e3b37e567bd5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_64d189a1137228e3bbb05058e25035b90d99e17724a086b4d1dca4a3ec8b8bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d189a1137228e3bbb05058e25035b90d99e17724a086b4d1dca4a3ec8b8bee->enter($__internal_64d189a1137228e3bbb05058e25035b90d99e17724a086b4d1dca4a3ec8b8bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1c768c2d4e1407a3f6abd24dab667bd8766d446241e360df5395d1a0978b492d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c768c2d4e1407a3f6abd24dab667bd8766d446241e360df5395d1a0978b492d->enter($__internal_1c768c2d4e1407a3f6abd24dab667bd8766d446241e360df5395d1a0978b492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1c768c2d4e1407a3f6abd24dab667bd8766d446241e360df5395d1a0978b492d->leave($__internal_1c768c2d4e1407a3f6abd24dab667bd8766d446241e360df5395d1a0978b492d_prof);

        
        $__internal_64d189a1137228e3bbb05058e25035b90d99e17724a086b4d1dca4a3ec8b8bee->leave($__internal_64d189a1137228e3bbb05058e25035b90d99e17724a086b4d1dca4a3ec8b8bee_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bf85eda10654c4fb5c6ea366691005e7b6f0aad60d080a104155dedbcbebe78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf85eda10654c4fb5c6ea366691005e7b6f0aad60d080a104155dedbcbebe78->enter($__internal_7bf85eda10654c4fb5c6ea366691005e7b6f0aad60d080a104155dedbcbebe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3809fab6213caf6cf61e449fa0991f885272634ec8717f65b66b52fba020cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3809fab6213caf6cf61e449fa0991f885272634ec8717f65b66b52fba020cc1->enter($__internal_a3809fab6213caf6cf61e449fa0991f885272634ec8717f65b66b52fba020cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3809fab6213caf6cf61e449fa0991f885272634ec8717f65b66b52fba020cc1->leave($__internal_a3809fab6213caf6cf61e449fa0991f885272634ec8717f65b66b52fba020cc1_prof);

        
        $__internal_7bf85eda10654c4fb5c6ea366691005e7b6f0aad60d080a104155dedbcbebe78->leave($__internal_7bf85eda10654c4fb5c6ea366691005e7b6f0aad60d080a104155dedbcbebe78_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
