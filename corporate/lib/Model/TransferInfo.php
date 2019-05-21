<?php
/**
 * TransferInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/corporation/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/corporation/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
 *
 * OpenAPI spec version: 1.1.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ganb\Corporate\Client\Model;

use \ArrayAccess;
use \Ganb\Corporate\Client\ObjectSerializer;

/**
 * TransferInfo Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transfer_amount' => 'string',
        'edi_info' => 'string',
        'beneficiary_bank_code' => 'string',
        'beneficiary_bank_name' => 'string',
        'beneficiary_branch_code' => 'string',
        'beneficiary_branch_name' => 'string',
        'account_type_code' => 'string',
        'account_number' => 'string',
        'beneficiary_name' => 'string',
        'transfer_detail_responses' => '\Ganb\Corporate\Client\Model\TransferDetailResponse[]',
        'unable_detail_infos' => '\Ganb\Corporate\Client\Model\UnableDetailInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transfer_amount' => null,
        'edi_info' => null,
        'beneficiary_bank_code' => null,
        'beneficiary_bank_name' => null,
        'beneficiary_branch_code' => null,
        'beneficiary_branch_name' => null,
        'account_type_code' => null,
        'account_number' => null,
        'beneficiary_name' => null,
        'transfer_detail_responses' => null,
        'unable_detail_infos' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transfer_amount' => 'transferAmount',
        'edi_info' => 'ediInfo',
        'beneficiary_bank_code' => 'beneficiaryBankCode',
        'beneficiary_bank_name' => 'beneficiaryBankName',
        'beneficiary_branch_code' => 'beneficiaryBranchCode',
        'beneficiary_branch_name' => 'beneficiaryBranchName',
        'account_type_code' => 'accountTypeCode',
        'account_number' => 'accountNumber',
        'beneficiary_name' => 'beneficiaryName',
        'transfer_detail_responses' => 'transferDetailResponses',
        'unable_detail_infos' => 'unableDetailInfos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_amount' => 'setTransferAmount',
        'edi_info' => 'setEdiInfo',
        'beneficiary_bank_code' => 'setBeneficiaryBankCode',
        'beneficiary_bank_name' => 'setBeneficiaryBankName',
        'beneficiary_branch_code' => 'setBeneficiaryBranchCode',
        'beneficiary_branch_name' => 'setBeneficiaryBranchName',
        'account_type_code' => 'setAccountTypeCode',
        'account_number' => 'setAccountNumber',
        'beneficiary_name' => 'setBeneficiaryName',
        'transfer_detail_responses' => 'setTransferDetailResponses',
        'unable_detail_infos' => 'setUnableDetailInfos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_amount' => 'getTransferAmount',
        'edi_info' => 'getEdiInfo',
        'beneficiary_bank_code' => 'getBeneficiaryBankCode',
        'beneficiary_bank_name' => 'getBeneficiaryBankName',
        'beneficiary_branch_code' => 'getBeneficiaryBranchCode',
        'beneficiary_branch_name' => 'getBeneficiaryBranchName',
        'account_type_code' => 'getAccountTypeCode',
        'account_number' => 'getAccountNumber',
        'beneficiary_name' => 'getBeneficiaryName',
        'transfer_detail_responses' => 'getTransferDetailResponses',
        'unable_detail_infos' => 'getUnableDetailInfos'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transfer_amount'] = isset($data['transfer_amount']) ? $data['transfer_amount'] : null;
        $this->container['edi_info'] = isset($data['edi_info']) ? $data['edi_info'] : null;
        $this->container['beneficiary_bank_code'] = isset($data['beneficiary_bank_code']) ? $data['beneficiary_bank_code'] : null;
        $this->container['beneficiary_bank_name'] = isset($data['beneficiary_bank_name']) ? $data['beneficiary_bank_name'] : null;
        $this->container['beneficiary_branch_code'] = isset($data['beneficiary_branch_code']) ? $data['beneficiary_branch_code'] : null;
        $this->container['beneficiary_branch_name'] = isset($data['beneficiary_branch_name']) ? $data['beneficiary_branch_name'] : null;
        $this->container['account_type_code'] = isset($data['account_type_code']) ? $data['account_type_code'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['beneficiary_name'] = isset($data['beneficiary_name']) ? $data['beneficiary_name'] : null;
        $this->container['transfer_detail_responses'] = isset($data['transfer_detail_responses']) ? $data['transfer_detail_responses'] : null;
        $this->container['unable_detail_infos'] = isset($data['unable_detail_infos']) ? $data['unable_detail_infos'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['transfer_amount']) && (mb_strlen($this->container['transfer_amount']) > 20)) {
            $invalidProperties[] = "invalid value for 'transfer_amount', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['transfer_amount']) && (mb_strlen($this->container['transfer_amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_amount', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['edi_info']) && (mb_strlen($this->container['edi_info']) > 20)) {
            $invalidProperties[] = "invalid value for 'edi_info', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['edi_info']) && (mb_strlen($this->container['edi_info']) < 1)) {
            $invalidProperties[] = "invalid value for 'edi_info', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['beneficiary_bank_code']) && (mb_strlen($this->container['beneficiary_bank_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'beneficiary_bank_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['beneficiary_bank_code']) && (mb_strlen($this->container['beneficiary_bank_code']) < 4)) {
            $invalidProperties[] = "invalid value for 'beneficiary_bank_code', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['beneficiary_bank_name']) && (mb_strlen($this->container['beneficiary_bank_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'beneficiary_bank_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['beneficiary_bank_name']) && (mb_strlen($this->container['beneficiary_bank_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'beneficiary_bank_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['beneficiary_branch_code']) && (mb_strlen($this->container['beneficiary_branch_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'beneficiary_branch_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['beneficiary_branch_code']) && (mb_strlen($this->container['beneficiary_branch_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'beneficiary_branch_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['beneficiary_branch_name']) && (mb_strlen($this->container['beneficiary_branch_name']) > 15)) {
            $invalidProperties[] = "invalid value for 'beneficiary_branch_name', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['beneficiary_branch_name']) && (mb_strlen($this->container['beneficiary_branch_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'beneficiary_branch_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_type_code']) && (mb_strlen($this->container['account_type_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'account_type_code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['account_type_code']) && (mb_strlen($this->container['account_type_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_type_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) > 7)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) < 7)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be bigger than or equal to 7.";
        }

        if (!is_null($this->container['beneficiary_name']) && (mb_strlen($this->container['beneficiary_name']) > 48)) {
            $invalidProperties[] = "invalid value for 'beneficiary_name', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['beneficiary_name']) && (mb_strlen($this->container['beneficiary_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'beneficiary_name', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets transfer_amount
     *
     * @return string
     */
    public function getTransferAmount()
    {
        return $this->container['transfer_amount'];
    }

    /**
     * Sets transfer_amount
     *
     * @param string $transfer_amount 振込金額 半角数字 1以上,整数のみ
     *
     * @return $this
     */
    public function setTransferAmount($transfer_amount)
    {
        if (!is_null($transfer_amount) && (mb_strlen($transfer_amount) > 20)) {
            throw new \InvalidArgumentException('invalid length for $transfer_amount when calling TransferInfo., must be smaller than or equal to 20.');
        }
        if (!is_null($transfer_amount) && (mb_strlen($transfer_amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_amount when calling TransferInfo., must be bigger than or equal to 1.');
        }

        $this->container['transfer_amount'] = $transfer_amount;

        return $this;
    }

    /**
     * Gets edi_info
     *
     * @return string
     */
    public function getEdiInfo()
    {
        return $this->container['edi_info'];
    }

    /**
     * Sets edi_info
     *
     * @param string $edi_info EDI情報 半角文字 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setEdiInfo($edi_info)
    {
        if (!is_null($edi_info) && (mb_strlen($edi_info) > 20)) {
            throw new \InvalidArgumentException('invalid length for $edi_info when calling TransferInfo., must be smaller than or equal to 20.');
        }
        if (!is_null($edi_info) && (mb_strlen($edi_info) < 1)) {
            throw new \InvalidArgumentException('invalid length for $edi_info when calling TransferInfo., must be bigger than or equal to 1.');
        }

        $this->container['edi_info'] = $edi_info;

        return $this;
    }

    /**
     * Gets beneficiary_bank_code
     *
     * @return string
     */
    public function getBeneficiaryBankCode()
    {
        return $this->container['beneficiary_bank_code'];
    }

    /**
     * Sets beneficiary_bank_code
     *
     * @param string $beneficiary_bank_code 被仕向金融機関番号 半角数字
     *
     * @return $this
     */
    public function setBeneficiaryBankCode($beneficiary_bank_code)
    {
        if (!is_null($beneficiary_bank_code) && (mb_strlen($beneficiary_bank_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_bank_code when calling TransferInfo., must be smaller than or equal to 4.');
        }
        if (!is_null($beneficiary_bank_code) && (mb_strlen($beneficiary_bank_code) < 4)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_bank_code when calling TransferInfo., must be bigger than or equal to 4.');
        }

        $this->container['beneficiary_bank_code'] = $beneficiary_bank_code;

        return $this;
    }

    /**
     * Gets beneficiary_bank_name
     *
     * @return string
     */
    public function getBeneficiaryBankName()
    {
        return $this->container['beneficiary_bank_name'];
    }

    /**
     * Sets beneficiary_bank_name
     *
     * @param string $beneficiary_bank_name 被仕向金融機関名カナ 半角文字
     *
     * @return $this
     */
    public function setBeneficiaryBankName($beneficiary_bank_name)
    {
        if (!is_null($beneficiary_bank_name) && (mb_strlen($beneficiary_bank_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_bank_name when calling TransferInfo., must be smaller than or equal to 30.');
        }
        if (!is_null($beneficiary_bank_name) && (mb_strlen($beneficiary_bank_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_bank_name when calling TransferInfo., must be bigger than or equal to 1.');
        }

        $this->container['beneficiary_bank_name'] = $beneficiary_bank_name;

        return $this;
    }

    /**
     * Gets beneficiary_branch_code
     *
     * @return string
     */
    public function getBeneficiaryBranchCode()
    {
        return $this->container['beneficiary_branch_code'];
    }

    /**
     * Sets beneficiary_branch_code
     *
     * @param string $beneficiary_branch_code 被仕向支店番号 半角数字
     *
     * @return $this
     */
    public function setBeneficiaryBranchCode($beneficiary_branch_code)
    {
        if (!is_null($beneficiary_branch_code) && (mb_strlen($beneficiary_branch_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_branch_code when calling TransferInfo., must be smaller than or equal to 3.');
        }
        if (!is_null($beneficiary_branch_code) && (mb_strlen($beneficiary_branch_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_branch_code when calling TransferInfo., must be bigger than or equal to 3.');
        }

        $this->container['beneficiary_branch_code'] = $beneficiary_branch_code;

        return $this;
    }

    /**
     * Gets beneficiary_branch_name
     *
     * @return string
     */
    public function getBeneficiaryBranchName()
    {
        return $this->container['beneficiary_branch_name'];
    }

    /**
     * Sets beneficiary_branch_name
     *
     * @param string $beneficiary_branch_name 被仕向支店名カナ 半角文字
     *
     * @return $this
     */
    public function setBeneficiaryBranchName($beneficiary_branch_name)
    {
        if (!is_null($beneficiary_branch_name) && (mb_strlen($beneficiary_branch_name) > 15)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_branch_name when calling TransferInfo., must be smaller than or equal to 15.');
        }
        if (!is_null($beneficiary_branch_name) && (mb_strlen($beneficiary_branch_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_branch_name when calling TransferInfo., must be bigger than or equal to 1.');
        }

        $this->container['beneficiary_branch_name'] = $beneficiary_branch_name;

        return $this;
    }

    /**
     * Gets account_type_code
     *
     * @return string
     */
    public function getAccountTypeCode()
    {
        return $this->container['account_type_code'];
    }

    /**
     * Sets account_type_code
     *
     * @param string $account_type_code 科目コード（預金種別コード） 半角数字 1：普通、2：当座、4：貯蓄、9：その他
     *
     * @return $this
     */
    public function setAccountTypeCode($account_type_code)
    {
        if (!is_null($account_type_code) && (mb_strlen($account_type_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $account_type_code when calling TransferInfo., must be smaller than or equal to 1.');
        }
        if (!is_null($account_type_code) && (mb_strlen($account_type_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_type_code when calling TransferInfo., must be bigger than or equal to 1.');
        }

        $this->container['account_type_code'] = $account_type_code;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number 口座番号 半角数字 7桁未満の番号は右詰で、前ゼロで埋めること
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        if (!is_null($account_number) && (mb_strlen($account_number) > 7)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling TransferInfo., must be smaller than or equal to 7.');
        }
        if (!is_null($account_number) && (mb_strlen($account_number) < 7)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling TransferInfo., must be bigger than or equal to 7.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets beneficiary_name
     *
     * @return string
     */
    public function getBeneficiaryName()
    {
        return $this->container['beneficiary_name'];
    }

    /**
     * Sets beneficiary_name
     *
     * @param string $beneficiary_name 受取人名 半角文字 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setBeneficiaryName($beneficiary_name)
    {
        if (!is_null($beneficiary_name) && (mb_strlen($beneficiary_name) > 48)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_name when calling TransferInfo., must be smaller than or equal to 48.');
        }
        if (!is_null($beneficiary_name) && (mb_strlen($beneficiary_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $beneficiary_name when calling TransferInfo., must be bigger than or equal to 1.');
        }

        $this->container['beneficiary_name'] = $beneficiary_name;

        return $this;
    }

    /**
     * Gets transfer_detail_responses
     *
     * @return \Ganb\Corporate\Client\Model\TransferDetailResponse[]
     */
    public function getTransferDetailResponses()
    {
        return $this->container['transfer_detail_responses'];
    }

    /**
     * Sets transfer_detail_responses
     *
     * @param \Ganb\Corporate\Client\Model\TransferDetailResponse[] $transfer_detail_responses 振込明細結果 振込明細結果のリスト 正常時のみ応答 該当する情報が無い場合は空のリストを返却
     *
     * @return $this
     */
    public function setTransferDetailResponses($transfer_detail_responses)
    {
        $this->container['transfer_detail_responses'] = $transfer_detail_responses;

        return $this;
    }

    /**
     * Gets unable_detail_infos
     *
     * @return \Ganb\Corporate\Client\Model\UnableDetailInfo[]
     */
    public function getUnableDetailInfos()
    {
        return $this->container['unable_detail_infos'];
    }

    /**
     * Sets unable_detail_infos
     *
     * @param \Ganb\Corporate\Client\Model\UnableDetailInfo[] $unable_detail_infos 不能明細情報 不能明細情報のリスト 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setUnableDetailInfos($unable_detail_infos)
    {
        $this->container['unable_detail_infos'] = $unable_detail_infos;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


