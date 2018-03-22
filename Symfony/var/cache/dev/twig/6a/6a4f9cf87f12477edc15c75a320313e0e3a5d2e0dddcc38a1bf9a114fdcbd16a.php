<?php

/* ::layout.html.twig */
class __TwigTemplate_3ab26bad642074bfd65940253a5f833f47709c80dd80f4bb4adcb8c09661cb14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd8f980dd3b4ab0ea5bb19ebc2f59122b574c9f55d1a89c1f65384241e1e6b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8f980dd3b4ab0ea5bb19ebc2f59122b574c9f55d1a89c1f65384241e1e6b8d->enter($__internal_fd8f980dd3b4ab0ea5bb19ebc2f59122b574c9f55d1a89c1f65384241e1e6b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_3e5dea2e25d759031eb1c35141aedf347f165f6dd6a4dd5ba93f17554b6e3322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5dea2e25d759031eb1c35141aedf347f165f6dd6a4dd5ba93f17554b6e3322->enter($__internal_3e5dea2e25d759031eb1c35141aedf347f165f6dd6a4dd5ba93f17554b6e3322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Gestion des visites personnalisées</h1>
    </div>

    <footer>
      <p>Réalisé par QCB.</p>
    </footer>
  </div>

  ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
</body>
</html>";
        
        $__internal_fd8f980dd3b4ab0ea5bb19ebc2f59122b574c9f55d1a89c1f65384241e1e6b8d->leave($__internal_fd8f980dd3b4ab0ea5bb19ebc2f59122b574c9f55d1a89c1f65384241e1e6b8d_prof);

        
        $__internal_3e5dea2e25d759031eb1c35141aedf347f165f6dd6a4dd5ba93f17554b6e3322->leave($__internal_3e5dea2e25d759031eb1c35141aedf347f165f6dd6a4dd5ba93f17554b6e3322_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e262399853e83aa18b2c0c85778a37a5518aa117976104f8c9f2055d2e48e4f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e262399853e83aa18b2c0c85778a37a5518aa117976104f8c9f2055d2e48e4f8->enter($__internal_e262399853e83aa18b2c0c85778a37a5518aa117976104f8c9f2055d2e48e4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20ede851b44326e2f581cd2d8378bfa71b55a3b5fc3c798c744c0a3662ba1ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ede851b44326e2f581cd2d8378bfa71b55a3b5fc3c798c744c0a3662ba1ef5->enter($__internal_20ede851b44326e2f581cd2d8378bfa71b55a3b5fc3c798c744c0a3662ba1ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TOBAT";
        
        $__internal_20ede851b44326e2f581cd2d8378bfa71b55a3b5fc3c798c744c0a3662ba1ef5->leave($__internal_20ede851b44326e2f581cd2d8378bfa71b55a3b5fc3c798c744c0a3662ba1ef5_prof);

        
        $__internal_e262399853e83aa18b2c0c85778a37a5518aa117976104f8c9f2055d2e48e4f8->leave($__internal_e262399853e83aa18b2c0c85778a37a5518aa117976104f8c9f2055d2e48e4f8_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f3c3e2ca771bdf31892dba1bb5e0d96303578647f09d7a4651dbc4ffd479235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3c3e2ca771bdf31892dba1bb5e0d96303578647f09d7a4651dbc4ffd479235->enter($__internal_2f3c3e2ca771bdf31892dba1bb5e0d96303578647f09d7a4651dbc4ffd479235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4fd2fdeebf83a691d4ca1fabb2fb935efb8938530e570f103b5fbee55758497e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd2fdeebf83a691d4ca1fabb2fb935efb8938530e570f103b5fbee55758497e->enter($__internal_4fd2fdeebf83a691d4ca1fabb2fb935efb8938530e570f103b5fbee55758497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_4fd2fdeebf83a691d4ca1fabb2fb935efb8938530e570f103b5fbee55758497e->leave($__internal_4fd2fdeebf83a691d4ca1fabb2fb935efb8938530e570f103b5fbee55758497e_prof);

        
        $__internal_2f3c3e2ca771bdf31892dba1bb5e0d96303578647f09d7a4651dbc4ffd479235->leave($__internal_2f3c3e2ca771bdf31892dba1bb5e0d96303578647f09d7a4651dbc4ffd479235_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a21acc471e2a8b4995cba0c67c3401a3eb9b9243a6d3479a1c0a9fdd485b3984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21acc471e2a8b4995cba0c67c3401a3eb9b9243a6d3479a1c0a9fdd485b3984->enter($__internal_a21acc471e2a8b4995cba0c67c3401a3eb9b9243a6d3479a1c0a9fdd485b3984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d27add1d18b70f23eeee92adf49deb46d2ba034258f0282a9beb5129bd9c9c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27add1d18b70f23eeee92adf49deb46d2ba034258f0282a9beb5129bd9c9c75->enter($__internal_d27add1d18b70f23eeee92adf49deb46d2ba034258f0282a9beb5129bd9c9c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_d27add1d18b70f23eeee92adf49deb46d2ba034258f0282a9beb5129bd9c9c75->leave($__internal_d27add1d18b70f23eeee92adf49deb46d2ba034258f0282a9beb5129bd9c9c75_prof);

        
        $__internal_a21acc471e2a8b4995cba0c67c3401a3eb9b9243a6d3479a1c0a9fdd485b3984->leave($__internal_a21acc471e2a8b4995cba0c67c3401a3eb9b9243a6d3479a1c0a9fdd485b3984_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  109 => 25,  98 => 10,  89 => 9,  71 => 8,  59 => 29,  57 => 25,  42 => 12,  40 => 9,  36 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">

  <title>{% block title %}TOBAT{% endblock %}</title>
  {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Gestion des visites personnalisées</h1>
    </div>

    <footer>
      <p>Réalisé par QCB.</p>
    </footer>
  </div>

  {% block javascripts %}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "::layout.html.twig", "C:\\wamp64\\www\\PPE-4\\Symfony\\app/Resources\\views/layout.html.twig");
    }
}
