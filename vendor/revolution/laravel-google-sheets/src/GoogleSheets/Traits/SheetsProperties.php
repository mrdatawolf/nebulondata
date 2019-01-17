<?php
namespace Revolution\Google\Sheets\Traits;

trait SheetsProperties
{
    /**
     * @return \stdClass
     */
    public function spreadsheetProperties()
    {
        $properties = $this->service->spreadsheets->get($this->spreadsheetId)->getProperties()->toSimpleObject();

        return $properties;
    }

    /**
     * @return \stdClass
     */
    public function sheetProperties()
    {
        $sheets = $this->service->spreadsheets->get($this->spreadsheetId, ['ranges' => $this->sheet])->getSheets();

        $properties = $sheets[0]->getProperties()->toSimpleObject();

        return $properties;
    }
}
