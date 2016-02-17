Getting Started With GrossumFaqBundle
==================================

### Create your Faq class

##### yaml

If you use yml to configure Doctrine you must add two files. The Entity and the orm.yml:

```php
<?php
// src/Application/Grossum/FaqBundle/Entity/Faq.php

namespace Application\Grossum\FaqBundle\Entity;

use Grossum\FaqBundle\Entity\Faq as BaseFaq;

/**
 * Faq
 */
class Faq extends BaseFaq
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
```
```yaml
# src/Application/Grossum/FaqBundle/Resources/config/doctrine/Faq.orm.yml
Application\Grossum\FaqBundle\Faq:
    type:  entity
    table: faq
    id:
        id:
            type: integer
            generator:
                strategy: AUTO
```
