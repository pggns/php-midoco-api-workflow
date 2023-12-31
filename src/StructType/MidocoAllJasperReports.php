<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAllJasperReports StructType
 * @subpackage Structs
 */
class MidocoAllJasperReports extends AbstractStructBase
{
    /**
     * The MidocoJasperReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReport
     * @var \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport[]
     */
    protected array $MidocoJasperReport = [];
    /**
     * Constructor method for MidocoAllJasperReports
     * @uses MidocoAllJasperReports::setMidocoJasperReport()
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport[] $midocoJasperReport
     */
    public function __construct(array $midocoJasperReport = [])
    {
        $this
            ->setMidocoJasperReport($midocoJasperReport);
    }
    /**
     * Get MidocoJasperReport value
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport[]
     */
    public function getMidocoJasperReport(): array
    {
        return $this->MidocoJasperReport;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportForArrayConstraintsFromSetMidocoJasperReport(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAllJasperReportsMidocoJasperReportItem) {
            // validation for constraint: itemType
            if (!$midocoAllJasperReportsMidocoJasperReportItem instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport) {
                $invalidValues[] = is_object($midocoAllJasperReportsMidocoJasperReportItem) ? get_class($midocoAllJasperReportsMidocoJasperReportItem) : sprintf('%s(%s)', gettype($midocoAllJasperReportsMidocoJasperReportItem), var_export($midocoAllJasperReportsMidocoJasperReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport[] $midocoJasperReport
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoAllJasperReports
     */
    public function setMidocoJasperReport(array $midocoJasperReport = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportArrayErrorMessage = self::validateMidocoJasperReportForArrayConstraintsFromSetMidocoJasperReport($midocoJasperReport))) {
            throw new InvalidArgumentException($midocoJasperReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReport = $midocoJasperReport;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport $item
     * @return \Pggns\MidocoApi\Workflow\StructType\MidocoAllJasperReports
     */
    public function addToMidocoJasperReport(\Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Workflow\StructType\MidocoJasperReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReport[] = $item;
        
        return $this;
    }
}
