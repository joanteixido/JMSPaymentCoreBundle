Payment\CoreBundle
==================
This bundle provides a unified view of all payment protocols being implemented 
by plugins by means of a simple facade. The payment plugin controller (PPC) can
be used to access multiple payment backends through a simple and unified API.

Additionally, the bundle provides the following facilities to plugin implementations:

  * Persistence of Financial Entities (PaymentInstruction, Payment, Credit,
    FinancialTransaction, ExtendedData)
  * Transaction Management
  * Encryption of Sensitive Data
  * Retry Logic

Install
=======

Just add this bundle to your vendors and then add this basic configuration into your config.yml: 
::
    // YAML
    jms_payment_core:
      secret: Your own and unic secret

Usage
=====
To use the DemoController remember to add the routing to your routing.yml:
::


    // YAML
    JMSPaymentCoreDemoBundle:
      resource: "@JMSPaymentCoreBundle/Resources/config/routing.yml"
      prefix:   /

See the DemoController for a sample usage:
https://github.com/schmittjoh/JMSPaymentCoreBundle/blob/master/Controller/DemoController.php


Plugins
=======
Each plugin is a stateless service which provides access to a specific payment 
back end, payment processor, or payment service provider.

All plugins must implement either PluginInterface, or QueryablePluginInterface.