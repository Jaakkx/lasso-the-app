<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerGMkScHq\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerGMkScHq/EntityManager_9a5be93.php';
require __DIR__.'/ContainerGMkScHq/getSession_FactoryService.php';
require __DIR__.'/ContainerGMkScHq/getServicesResetterService.php';
require __DIR__.'/ContainerGMkScHq/getSerializer_Mapping_ClassMetadataFactoryService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerGMkScHq/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerGMkScHq/getSecrets_VaultService.php';
require __DIR__.'/ContainerGMkScHq/getRouting_LoaderService.php';
require __DIR__.'/ContainerGMkScHq/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerGMkScHq/getErrorControllerService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerGMkScHq/getDoctrineService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_Security_Access_DecisionManagerService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerGMkScHq/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerGMkScHq/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerGMkScHq/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerGMkScHq/getCache_SystemClearerService.php';
require __DIR__.'/ContainerGMkScHq/getCache_SystemService.php';
require __DIR__.'/ContainerGMkScHq/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerGMkScHq/getCache_AppClearerService.php';
require __DIR__.'/ContainerGMkScHq/getCache_AppService.php';
require __DIR__.'/ContainerGMkScHq/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerGMkScHq/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerGMkScHq/getTemplateControllerService.php';
require __DIR__.'/ContainerGMkScHq/getRedirectControllerService.php';
require __DIR__.'/ContainerGMkScHq/getUserRepositoryService.php';
require __DIR__.'/ContainerGMkScHq/getQuestionUserRepositoryService.php';
require __DIR__.'/ContainerGMkScHq/getQuestionRepositoryService.php';
require __DIR__.'/ContainerGMkScHq/getFavorisRepositoryService.php';
require __DIR__.'/ContainerGMkScHq/getCategoryRepositoryService.php';
require __DIR__.'/ContainerGMkScHq/getAssociationUserRepositoryService.php';
require __DIR__.'/ContainerGMkScHq/getAssociationRepositoryService.php';
require __DIR__.'/ContainerGMkScHq/getRegistrationControllerService.php';
require __DIR__.'/ContainerGMkScHq/getQuestionControllerService.php';
require __DIR__.'/ContainerGMkScHq/getLassoControllerService.php';
require __DIR__.'/ContainerGMkScHq/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_XyPGiYFService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_UCSWYWRService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_GNc8e5BService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_FZRaRIjService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_EAbzJKIService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_9wplPMAService.php';
require __DIR__.'/ContainerGMkScHq/get_ServiceLocator_8RoEgyhService.php';
require __DIR__.'/ContainerGMkScHq/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerGMkScHq/get_Container_Private_SerializerService.php';
require __DIR__.'/ContainerGMkScHq/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerGMkScHq/get_Container_Private_Security_AuthorizationCheckerService.php';
require __DIR__.'/ContainerGMkScHq/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerGMkScHq/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\LassoController';
$classes[] = 'App\Controller\QuestionController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Repository\AssociationRepository';
$classes[] = 'App\Repository\AssociationUserRepository';
$classes[] = 'App\Repository\CategoryRepository';
$classes[] = 'App\Repository\FavorisRepository';
$classes[] = 'App\Repository\QuestionRepository';
$classes[] = 'App\Repository\QuestionUserRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
