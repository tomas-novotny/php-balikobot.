<?php

declare(strict_types=1);

namespace Inspirum\Balikobot\Tests\Integration\Service;

use DateTimeImmutable;
use Inspirum\Balikobot\Definitions\AttributeType;
use Inspirum\Balikobot\Definitions\Carrier;
use Inspirum\Balikobot\Definitions\Country;
use Inspirum\Balikobot\Definitions\Response;
use Inspirum\Balikobot\Definitions\ServiceType;
use Inspirum\Balikobot\Exception\Exception;
use Inspirum\Balikobot\Model\Package\DefaultPackage;
use Inspirum\Balikobot\Model\Package\DefaultPackageCollection;
use Inspirum\Balikobot\Model\PackageData\DefaultPackageData;
use Inspirum\Balikobot\Model\PackageData\DefaultPackageDataCollection;
use Inspirum\Balikobot\Tests\Integration\BaseTestCase;

final class DefaultPackageServiceTest extends BaseTestCase
{
    public function testAddPackages(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packages = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        $package = $packageService->addPackages($packages);

        self::assertCount(1, $package->getPackageIds());
        self::assertEquals(Carrier::ZASILKOVNA, $package->getCarrier());
    }

    public function testAddPackagesForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('X');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packages = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        try {
            $packageService->addPackages($packages);
            self::fail('ADD request should thrown exception');
        } catch (Exception $exception) {
            self::assertEquals(400, $exception->getStatusCode());
            self::assertTrue(isset($exception->getErrors()[0]['branch_id']));
        }
    }

    public function testDropPackages(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packagesData = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        $packages = $packageService->addPackages($packagesData);

        $packageService->dropPackages($packages);

        self::assertTrue(true);
    }

    public function testDropPackagesForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $package = new DefaultPackage(
            Carrier::PPL,
            '12345',
            '0001',
            '1234',
        );

        try {
            $packageService->dropPackage($package);
            self::fail('DROP request should thrown exception');
        } catch (Exception $exception) {
            self::assertSame(400, $exception->getStatusCode());
            self::assertTrue(isset($exception->getErrors()[0]['status']));
            self::assertSame(Response::STATUS_CODE_ERRORS[404], $exception->getErrors()[0]['status']);
        }
    }

    public function testOrderShipment(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::CP_DR);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packagesData = new DefaultPackageDataCollection(Carrier::CP, [
            $packageData,
        ]);

        $packages = $packageService->addPackages($packagesData);

        $orderedShipment = $packageService->orderShipment($packages);

        self::assertEquals(Carrier::CP, $orderedShipment->getCarrier());
        self::assertNotEmpty($orderedShipment->getOrderId());
    }

    public function testOrderShipmentForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $package  = new DefaultPackage(
            Carrier::PPL,
            '12345',
            '0001',
            '1234',
        );
        $packages = new DefaultPackageCollection(Carrier::PPL, [
            $package,
        ]);

        try {
            $packageService->orderShipment($packages);
            self::fail('ORDER request should thrown exception');
        } catch (Exception $exception) {
            self::assertSame(406, $exception->getStatusCode());
        }
    }

    public function testGetOrder(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packagesData = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        $packages = $packageService->addPackages($packagesData);

        $orderedShipment = $packageService->orderShipment($packages);

        $orderedShipmentData = $packageService->getOrder($orderedShipment->getCarrier(), $orderedShipment->getOrderId());

        self::assertEquals($orderedShipment, $orderedShipmentData);
    }

    public function testGetOrderForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        try {
            $packageService->getOrder(Carrier::ZASILKOVNA, '1234');
            self::fail('ORDERVIEW request should thrown exception');
        } catch (Exception $exception) {
            self::assertSame(404, $exception->getStatusCode());
        }
    }

    public function testGetOverview(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packages = $packageService->getOverview(Carrier::ZASILKOVNA);

        self::assertGreaterThanOrEqual(1, $packages->count());
    }

    public function testGetLabels(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packagesData = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        $packages = $packageService->addPackages($packagesData);

        $labelsUrl = $packageService->getLabels($packages);

        self::assertNotEmpty($labelsUrl);
    }

    public function testGetLabelsForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $package  = new DefaultPackage(
            Carrier::PPL,
            '12345',
            '0001',
            '1234',
        );
        $packages = new DefaultPackageCollection(Carrier::PPL, [
            $package,
        ]);

        try {
            $packageService->getLabels($packages);
            self::fail('LABELS request should thrown exception');
        } catch (Exception $exception) {
            self::assertSame(406, $exception->getStatusCode());
        }
    }

    public function testGetPackageInfo(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packagesData = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        $packages = $packageService->addPackages($packagesData);
        $package  = $packages[0] ?? self::fail();

        $packageDataInfo = $packageService->getPackageInfo($package);

        self::assertSame($packagesData[0][AttributeType::BRANCH_ID], $packageDataInfo[AttributeType::BRANCH_ID]);
        self::assertSame($packagesData[0][AttributeType::REC_NAME], $packageDataInfo[AttributeType::REC_NAME]);
        self::assertSame($packagesData[0][AttributeType::REC_EMAIL], $packageDataInfo[AttributeType::REC_EMAIL]);

        self::assertSame($packagesData[0]->getEid(), $packageDataInfo->getEID());
        $packageDataInfo->offsetUnset(AttributeType::EID);

        $packageDataInfoByPackageId = $packageService->getPackageInfoByCarrierId($package->getCarrier(), $package->getCarrierId());
        $packageDataInfoByCarrierId = $packageService->getPackageInfoByPackageId($package->getCarrier(), $package->getPackageId());

        self::assertEquals($packageDataInfo, $packageDataInfoByPackageId);
        self::assertEquals($packageDataInfo, $packageDataInfoByCarrierId);
    }

    public function testGetPackageInfoForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $package = new DefaultPackage(
            Carrier::PPL,
            '12345',
            '0001',
            '1234',
        );

        try {
            $packageService->getPackageInfo($package);
            self::fail('PACKAGE request should thrown exception');
        } catch (Exception $exception) {
            self::assertSame(404, $exception->getStatusCode());
        }
    }

    public function testCheckPackages(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packages = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        $packageService->checkPackages($packages);

        self::assertTrue(true);
    }

    public function testCheckPackagesInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::ZASILKOVNA_VMCZ);
        $packageData->setBranchId('X');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packages = new DefaultPackageDataCollection(Carrier::ZASILKOVNA, [
            $packageData,
        ]);

        try {
            $packageService->checkPackages($packages);
            self::fail('CHECK request should thrown exception');
        } catch (Exception $exception) {
            self::assertEquals(400, $exception->getStatusCode());
            self::assertTrue(isset($exception->getErrors()[0]['branch_id']));
        }
    }

    public function testGetProofOfDelivery(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::UPS_EXPRESS);
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice 15');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);
        $packageData->setContent('test');

        $packagesData = new DefaultPackageDataCollection(Carrier::UPS, [
            $packageData,
        ]);

        $packages = $packageService->addPackages($packagesData);

        $proofOfDeliveries = $packageService->getProofOfDeliveries($packages);

        self::assertNotEmpty($proofOfDeliveries);
    }

    public function testGetProofOfDeliveryForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $package  = new DefaultPackage(
            Carrier::TNT,
            '12345',
            '0001',
            '1234',
        );
        $packages = new DefaultPackageCollection(Carrier::TNT, [
            $package,
        ]);

        try {
            $packageService->getProofOfDeliveries($packages);
            self::fail('POD request should thrown exception');
        } catch (Exception $exception) {
            self::assertSame(404, $exception->getStatusCode());
        }
    }

    public function testGetTransportCosts(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::TOPTRANS_TOPTIME);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);
        $packageData->setWeight(1.0);
        $packageData->setMuType('KUS');

        $packagesData = new DefaultPackageDataCollection(Carrier::TOPTRANS, [
            $packageData,
        ]);

        $transportCosts = $packageService->getTransportCosts($packagesData);

        self::assertEquals(1, $transportCosts->count());
    }

    public function testGetTransportCostsForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::TOPTRANS_PERSONAL);
        $packageData->setBranchId('12');
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);
        $packageData->setWeight(10);

        $packagesData = new DefaultPackageDataCollection(Carrier::TOPTRANS, [
            $packageData,
        ]);

        try {
            $packageService->getTransportCosts($packagesData);
            self::fail('TRANSPORTCOSTS request should thrown exception');
        } catch (Exception $exception) {
            self::assertEquals(400, $exception->getStatusCode());
            self::assertTrue(isset($exception->getErrors()[0]['mu_type_one']));
        }
    }

    public function testOrderB2AShipment(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::PPL_PARCEL_BUSSINESS_CZ);
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecEmail('tets@test.cz');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCity('Praha');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);
        $packageData->setRecPhone('776555888');
        $packageData->setPrice(1000.00);

        $packagesData = new DefaultPackageDataCollection(Carrier::PPL, [
            $packageData,
        ]);

        $orderPackages = $packageService->orderB2AShipment($packagesData);
        self::assertCount(1, $orderPackages->getPackageIds());
    }

    public function testOrderB2AShipmentForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $packageData = new DefaultPackageData();
        $packageData->setServiceType(ServiceType::PPL_PARCEL_BUSSINESS_CZ);
        $packageData->setRecName('Tomáš Novák');
        $packageData->setRecZip('12000');
        $packageData->setRecStreet('Ulice');
        $packageData->setRecCountry(Country::CZECH_REPUBLIC);

        $packagesData = new DefaultPackageDataCollection(Carrier::PPL, [
            $packageData,
        ]);

        try {
            $packageService->orderB2AShipment($packagesData);
            self::fail('B2A request should thrown exception');
        } catch (Exception $exception) {
            self::assertEquals(400, $exception->getStatusCode());
            self::assertTrue(isset($exception->getErrors()[0]['rec_city']));
        }
    }

    public function testOrderPickup(): void
    {
        $packageService = $this->newDefaultPackageService();

        $carrier      = Carrier::UPS;
        $dateFrom     = new DateTimeImmutable('+1 DAY');
        $dateTo       = new DateTimeImmutable('+1 DAY +2 HOURS');
        $weight       = 10.0;
        $packageCount = 1;
        $message      = 'testMessage';

        $packageService->orderPickup(
            $carrier,
            $dateFrom,
            $dateTo,
            $weight,
            $packageCount,
            $message,
        );

        self::assertTrue(true);
    }

    public function testOrderPickupForInvalidData(): void
    {
        $packageService = $this->newDefaultPackageService();

        $carrier      = Carrier::UPS;
        $dateFrom     = new DateTimeImmutable('-1 DAY');
        $dateTo       = new DateTimeImmutable('-1 DAY +2 HOURS');
        $weight       = 10.0;
        $packageCount = 1;
        $message      = 'testMessage';

        try {
            $packageService->orderPickup(
                $carrier,
                $dateFrom,
                $dateTo,
                $weight,
                $packageCount,
                $message,
            );
            self::fail('ORDERPICKUP request should thrown exception');
        } catch (Exception $exception) {
            self::assertEquals(400, $exception->getStatusCode());
        }
    }
}
