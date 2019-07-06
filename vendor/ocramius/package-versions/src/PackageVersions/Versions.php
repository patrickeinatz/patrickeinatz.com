<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    public const VERSIONS          = array (
  'behat/transliterator' => 'v1.2.0@826ce7e9c2a6664c0d1f381cbb38b1fb80a7ee2c',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'doctrine/annotations' => 'v1.6.1@53120e0eb10355388d6ccbe462f1fea34ddadb24',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.1@d2ae4ef05e25197343b6a39bae1d3c427a2f6956',
  'doctrine/common' => 'v2.10.0@30e33f60f64deec87df728c02b107f82cdafad9d',
  'doctrine/dbal' => 'v2.9.2@22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9',
  'doctrine/doctrine-bundle' => '1.10.2@1f99e6645030542079c57d4680601a4a8778a1bd',
  'doctrine/doctrine-cache-bundle' => '1.3.5@5514c90d9fb595e1095e6d66ebb98ce9ef049927',
  'doctrine/doctrine-migrations-bundle' => 'v2.0.0@4c9579e0e43df1fb3f0ca29b9c20871c824fac71',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'doctrine/lexer' => 'v1.0.1@83893c552fd2045dd78aef794c31e694c37c0b8c',
  'doctrine/migrations' => 'v2.0.0@0101f5bd7f4e5043bf8630db2930f8fd7da552b6',
  'doctrine/orm' => 'v2.6.3@434820973cadf2da2d66e7184be370084cc32ca8',
  'doctrine/persistence' => 'v1.1.0@c0f1c17602afc18b4cbd8e1c8125f264c9cf7d38',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'egulias/email-validator' => '2.1.7@709f21f92707308cdf8f9bcfa1af4cb26586521e',
  'fig/link-util' => '1.0.0@1a07821801a148be4add11ab0603e4af55a72fac',
  'gedmo/doctrine-extensions' => 'v2.4.37@5dd471f656e46d815f063bf3f12c667649ec7ffb',
  'guzzlehttp/guzzle' => '6.3.3@407b0cb880ace85c9b63c5f9551db498cb2d50ba',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.5.2@9f83dded91781a01c63574e387eaa769be769115',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'knplabs/knp-components' => 'v1.3.10@fc1755ba2b77f83a3d3c99e21f3026ba2a1429be',
  'knplabs/knp-paginator-bundle' => 'v3.0.0@06100a8f3a1e878d3d2d5d06a61c4e648f94aed7',
  'knplabs/knp-time-bundle' => 'v1.9.1@d8464f1f0e0bdeb6fab3dd0d34bc085705e769f0',
  'monolog/monolog' => '1.24.0@bfc9ebb28f97e7a24c45bdc3f0ff482e47bb0266',
  'nexylan/slack' => 'v2.2.0@ba417382d0c54cc7c7e0ca2719e39a4f659236dc',
  'nexylan/slack-bundle' => 'v2.1.0@4e55be5f6931047e99a97a0907b444b57a26397f',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'ocramius/proxy-manager' => '2.1.1@e18ac876b2e4819c76349de8f78ccc8ef1554cd7',
  'php-http/client-common' => '2.0.0@2b8aa3c4910afc21146a9c8f96adb266e869517a',
  'php-http/curl-client' => '2.0.0@e7a2a5ebcce1ff7d75eaf02b7c85634a6fac00da',
  'php-http/discovery' => '1.6.1@684855f2c2e9d0a61868b8f8d6bd0295c8a4b651',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => 'v2.0.0@b3842537338c949f2469557ef4ad4bdc47b58603',
  'php-http/httplug-bundle' => '1.15.2@35d281804a90f0359aa9da5b5b1f55c18aeafaf8',
  'php-http/logger-plugin' => '1.1.0@c1c6e90717ce350319b7b8bc489f1db35bb523fd',
  'php-http/message' => '1.7.2@b159ffe570dffd335e22ef0b91a946eacb182fa1',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'php-http/stopwatch-plugin' => '1.2.0@520419dd18755a1e7b29077e677fbeb16b6629e7',
  'phpdocumentor/reflection-common' => '1.0.1@21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  'phpdocumentor/reflection-docblock' => '4.3.0@94fd0001232e47129dd3504189fa1c7225010d08',
  'phpdocumentor/type-resolver' => '0.4.0@9c977708995954784726e25d0cd1dddf4e65b0f7',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '2.0.5@5601c8a83fbba7ef674a7369456d12f1e0d0eafa',
  'sensio/framework-extra-bundle' => 'v5.3.1@5f75c4658b03301cba17baa15a840b57b72b4262',
  'stof/doctrine-extensions-bundle' => 'v1.3.0@46db71ec7ffee9122eca3cdddd4ef8d84bae269c',
  'swiftmailer/swiftmailer' => 'v6.2.0@6fa3232ff9d3f8237c0fae4b7ff05e1baa4cd707',
  'symfony/asset' => 'v4.2.7@7eee96a8630f9448304ae4f0e3b474ea4e033664',
  'symfony/cache' => 'v4.2.7@9e64db924324700e19ef4f21c2c279a35ff9bdff',
  'symfony/config' => 'v4.2.7@0e745ead307d5dcd4e163e94a47ec04b1428943f',
  'symfony/console' => 'v4.2.7@e2840bb38bddad7a0feaf85931e38fdcffdb2f81',
  'symfony/contracts' => 'v1.0.2@1aa7ab2429c3d594dd70689604b5cf7421254cdf',
  'symfony/debug' => 'v4.2.7@2d279b6bb1d582dd5740d4d3251ae8c18812ed37',
  'symfony/dependency-injection' => 'v4.2.7@2748643dd378626c4d348a31ad12394e2d6f7ea8',
  'symfony/doctrine-bridge' => 'v4.2.7@7fd19cf9267c45a1920bf6821bb35050c1fa8e5c',
  'symfony/dotenv' => 'v4.2.7@b541d63b83532be55a020db8ed2e50598385a583',
  'symfony/event-dispatcher' => 'v4.2.7@fbce53cd74ac509cbe74b6f227622650ab759b02',
  'symfony/expression-language' => 'v4.2.7@a69b153996a13ffdb05395e8724c7217a8448e9e',
  'symfony/filesystem' => 'v4.2.7@e16b9e471703b2c60b95f14d31c1239f68f11601',
  'symfony/finder' => 'v4.2.7@e45135658bd6c14b61850bf131c4f09a55133f69',
  'symfony/flex' => 'v1.2.3@d65041a4c9b1dbcd606f8be3a5bae2bee4534f6a',
  'symfony/form' => 'v4.2.7@7a4a645d3654c17b1585f71e804d98dc76a67c9c',
  'symfony/framework-bundle' => 'v4.2.7@98e203073ad9fd05929b52849a300a81bf0d9ec9',
  'symfony/http-foundation' => 'v4.2.7@6ebbe61f48069033225c9d3fa7eb5ed116d766d6',
  'symfony/http-kernel' => 'v4.2.7@3db83303dbc1da9777e5ff63423b8b7fde423a1b',
  'symfony/inflector' => 'v4.2.7@275e54941a4f17a471c68d2a00e2513fc1fd4a78',
  'symfony/intl' => 'v4.2.7@6361d2168db3ef9203eeb565f05c1108dd04f796',
  'symfony/monolog-bridge' => 'v4.2.7@472c74b350542e51373dcb159c0dcc234dc74e38',
  'symfony/monolog-bundle' => 'v3.3.1@572e143afc03419a75ab002c80a2fd99299195ff',
  'symfony/options-resolver' => 'v4.2.7@fd4a5f27b7cd085b489247b9890ebca9f3e10044',
  'symfony/orm-pack' => 'v1.0.6@36c2a928482dc5f05c5c1c1b947242ae03ff1335',
  'symfony/polyfill-intl-icu' => 'v1.11.0@999878a3a09d73cae157b0cf89bb6fb2cc073057',
  'symfony/polyfill-intl-idn' => 'v1.11.0@c766e95bec706cdd89903b1eda8afab7d7a6b7af',
  'symfony/polyfill-mbstring' => 'v1.11.0@fe5e94c604826c35a32fa832f35bd036b6799609',
  'symfony/polyfill-php72' => 'v1.11.0@ab50dcf166d5f577978419edd37aa2bb8eabce0c',
  'symfony/process' => 'v4.2.7@8cf39fb4ccff793340c258ee7760fd40bfe745fe',
  'symfony/property-access' => 'v4.2.7@5440dd2b5373073beee051bd978b58a0f543b192',
  'symfony/property-info' => 'v4.2.7@22d5dffd43454b5c8b5c1432b6ffef53e9f058e5',
  'symfony/routing' => 'v4.2.7@0e5719d216017b1a0342fa48e86467cedca1c954',
  'symfony/security-bundle' => 'v4.2.7@5d3f378675a244a515dc8fdb96e96b9780639672',
  'symfony/security-core' => 'v4.2.7@d4d72ea26792370db1079fe9ecec707694482f1e',
  'symfony/security-csrf' => 'v4.2.7@385dcfcd6cf02e0b8d10524bd072169be2d5494b',
  'symfony/security-guard' => 'v4.2.7@1313f51e126e03e13aaf83d471f087647701e0ac',
  'symfony/security-http' => 'v4.2.7@ff2189e9921e4a88c4f621fa44444fe2b4fb1b11',
  'symfony/serializer' => 'v4.2.7@602bded27aee8c2b0844f6b772947d44f61747a0',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/stopwatch' => 'v4.2.7@b1a5f646d56a3290230dbc8edf2a0d62cda23f67',
  'symfony/swiftmailer-bundle' => 'v3.2.6@7a83160b50a2479d37eb74ba71577380b9afe4f5',
  'symfony/templating' => 'v4.2.8@1bb2d2eda3136fff122b8810ac1357440411abeb',
  'symfony/translation' => 'v4.2.7@46c0dede1f925383d13dc783857be2c41efd0b24',
  'symfony/twig-bridge' => 'v4.2.7@db70a233d660b96a883150d68fa0a5a882f2ba89',
  'symfony/twig-bundle' => 'v4.2.7@321d5bd0608f3cf34062c47edfe6079556f6d6f1',
  'symfony/validator' => 'v4.2.10@7c392e35f6c57e23f72b5a5fde4366e13a9e6fa0',
  'symfony/var-exporter' => 'v4.2.7@57e00f3e0a3deee65b67cf971455b98afeacca46',
  'symfony/web-link' => 'v4.2.7@47b8188b4bb8d24eef0bb287b0737d5b84a6cab8',
  'symfony/yaml' => 'v4.2.7@6712daf03ee25b53abb14e7e8e0ede1a770efdb1',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.8.1@91cc2594d3143761ce0399c1caffd0b500ffe5b9',
  'webmozart/assert' => '1.4.0@83e253c8e0be5b0257b881e1827274667c5c17a9',
  'zendframework/zend-code' => '3.3.1@c21db169075c6ec4b342149f446e7b7b724f95eb',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => 'v1.3.1@3a1e2c3c600e615a2dffe56d4ca0875cc5233e0a',
  'doctrine/doctrine-fixtures-bundle' => '3.1.0@f016565b251c2dfa32a8d6da44d1650dc9ec1498',
  'easycorp/easy-log-handler' => 'v1.0.7@5f95717248d20684f88cfb878d8bf3d78aadcbba',
  'facebook/webdriver' => '1.6.0@bd8c740097eb9f2fc3735250fc1912bc811a954e',
  'fzaninotto/faker' => 'v1.8.0@f72816b43e74063c8b10357394b6bba8cb1c10de',
  'knplabs/knp-markdown-bundle' => '1.7.1@c055def2e67fe0d3b3d2e993584f01ff222eff86',
  'michelf/php-markdown' => '1.8.0@01ab082b355bf188d907b9929cd99b2923053495',
  'nikic/php-parser' => 'v4.2.1@5221f49a608808c1e4d436df32884cbc1b821ac0',
  'symfony/browser-kit' => 'v4.2.7@c09c18cca96d7067152f78956faf55346c338283',
  'symfony/css-selector' => 'v4.2.7@48eddf66950fa57996e1be4a55916d65c10c604a',
  'symfony/debug-bundle' => 'v4.2.7@730c7361c4c66f9f5489172d8f1b606b60191937',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v4.2.7@53c97769814c80a84a8403efcf3ae7ae966d53bb',
  'symfony/maker-bundle' => 'v1.11.6@d262c2cace4d9bca99137a84f6fc6ba909a17e02',
  'symfony/panther' => 'v0.3.0@5e41bc856eded5f546c71173a1e8e260c5e3a07a',
  'symfony/phpunit-bridge' => 'v4.2.7@12593ad0bc54658d9bc74fa240a545b3873b4626',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.5@1792b80cc2da5310e84afa983682b71dfc409d17',
  'symfony/var-dumper' => 'v4.2.7@e760a38e12b15032325e64be63f7ffc1817af617',
  'symfony/web-profiler-bundle' => 'v4.2.7@b54819597b9638e192007a23e159fd5e5e09f45b',
  'symfony/web-server-bundle' => 'v4.2.7@91945ba7f59f2a4b4194f018da9d7aaedaf88418',
  'paragonie/random_compat' => '2.*@2b2d4fd07c1b99124cd472466b352ffbb7466729',
  'symfony/polyfill-ctype' => '*@2b2d4fd07c1b99124cd472466b352ffbb7466729',
  'symfony/polyfill-iconv' => '*@2b2d4fd07c1b99124cd472466b352ffbb7466729',
  'symfony/polyfill-php71' => '*@2b2d4fd07c1b99124cd472466b352ffbb7466729',
  'symfony/polyfill-php70' => '*@2b2d4fd07c1b99124cd472466b352ffbb7466729',
  'symfony/polyfill-php56' => '*@2b2d4fd07c1b99124cd472466b352ffbb7466729',
  '__root__' => 'dev-develop@2b2d4fd07c1b99124cd472466b352ffbb7466729',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}
