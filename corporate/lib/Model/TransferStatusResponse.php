<?php
/**
 * TransferStatusResponse
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
 * TransferStatusResponse Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferStatusResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acceptance_key_class' => 'string',
        'base_date' => 'string',
        'base_time' => 'string',
        'count' => 'string',
        'transfer_query_bulk_responses' => '\Ganb\Corporate\Client\Model\TransferQueryBulkResponse[]',
        'transfer_details' => '\Ganb\Corporate\Client\Model\TransferDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acceptance_key_class' => null,
        'base_date' => null,
        'base_time' => null,
        'count' => null,
        'transfer_query_bulk_responses' => null,
        'transfer_details' => null
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
        'acceptance_key_class' => 'acceptanceKeyClass',
        'base_date' => 'baseDate',
        'base_time' => 'baseTime',
        'count' => 'count',
        'transfer_query_bulk_responses' => 'transferQueryBulkResponses',
        'transfer_details' => 'transferDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceptance_key_class' => 'setAcceptanceKeyClass',
        'base_date' => 'setBaseDate',
        'base_time' => 'setBaseTime',
        'count' => 'setCount',
        'transfer_query_bulk_responses' => 'setTransferQueryBulkResponses',
        'transfer_details' => 'setTransferDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceptance_key_class' => 'getAcceptanceKeyClass',
        'base_date' => 'getBaseDate',
        'base_time' => 'getBaseTime',
        'count' => 'getCount',
        'transfer_query_bulk_responses' => 'getTransferQueryBulkResponses',
        'transfer_details' => 'getTransferDetails'
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
        $this->container['acceptance_key_class'] = isset($data['acceptance_key_class']) ? $data['acceptance_key_class'] : null;
        $this->container['base_date'] = isset($data['base_date']) ? $data['base_date'] : null;
        $this->container['base_time'] = isset($data['base_time']) ? $data['base_time'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['transfer_query_bulk_responses'] = isset($data['transfer_query_bulk_responses']) ? $data['transfer_query_bulk_responses'] : null;
        $this->container['transfer_details'] = isset($data['transfer_details']) ? $data['transfer_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['acceptance_key_class'] === null) {
            $invalidProperties[] = "'acceptance_key_class' can't be null";
        }
        if ((mb_strlen($this->container['acceptance_key_class']) > 1)) {
            $invalidProperties[] = "invalid value for 'acceptance_key_class', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['acceptance_key_class']) < 1)) {
            $invalidProperties[] = "invalid value for 'acceptance_key_class', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['base_date'] === null) {
            $invalidProperties[] = "'base_date' can't be null";
        }
        if ((mb_strlen($this->container['base_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'base_date', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['base_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'base_date', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['base_time'] === null) {
            $invalidProperties[] = "'base_time' can't be null";
        }
        if ((mb_strlen($this->container['base_time']) > 14)) {
            $invalidProperties[] = "invalid value for 'base_time', the character length must be smaller than or equal to 14.";
        }

        if ((mb_strlen($this->container['base_time']) < 14)) {
            $invalidProperties[] = "invalid value for 'base_time', the character length must be bigger than or equal to 14.";
        }

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ((mb_strlen($this->container['count']) > 7)) {
            $invalidProperties[] = "invalid value for 'count', the character length must be smaller than or equal to 7.";
        }

        if ((mb_strlen($this->container['count']) < 1)) {
            $invalidProperties[] = "invalid value for 'count', the character length must be bigger than or equal to 1.";
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
     * Gets acceptance_key_class
     *
     * @return string
     */
    public function getAcceptanceKeyClass()
    {
        return $this->container['acceptance_key_class'];
    }

    /**
     * Sets acceptance_key_class
     *
     * @param string $acceptance_key_class 照会対象キー区分 半角数字 リクエストしたときと同じ内容 照会対象のキー 1：振込申請照会対象指定、2：振込一括照会対象指定
     *
     * @return $this
     */
    public function setAcceptanceKeyClass($acceptance_key_class)
    {
        if ((mb_strlen($acceptance_key_class) > 1)) {
            throw new \InvalidArgumentException('invalid length for $acceptance_key_class when calling TransferStatusResponse., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($acceptance_key_class) < 1)) {
            throw new \InvalidArgumentException('invalid length for $acceptance_key_class when calling TransferStatusResponse., must be bigger than or equal to 1.');
        }

        $this->container['acceptance_key_class'] = $acceptance_key_class;

        return $this;
    }

    /**
     * Gets base_date
     *
     * @return string
     */
    public function getBaseDate()
    {
        return $this->container['base_date'];
    }

    /**
     * Sets base_date
     *
     * @param string $base_date 基準日 半角文字 振込照会明細情報を照会した基準日を示します YYYY-MM-DD形式
     *
     * @return $this
     */
    public function setBaseDate($base_date)
    {
        if ((mb_strlen($base_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $base_date when calling TransferStatusResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($base_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $base_date when calling TransferStatusResponse., must be bigger than or equal to 10.');
        }

        $this->container['base_date'] = $base_date;

        return $this;
    }

    /**
     * Gets base_time
     *
     * @return string
     */
    public function getBaseTime()
    {
        return $this->container['base_time'];
    }

    /**
     * Sets base_time
     *
     * @param string $base_time 基準時刻 半角文字 振込照会明細情報を照会した基準時刻を示します HH:MM:SS+09:00形式
     *
     * @return $this
     */
    public function setBaseTime($base_time)
    {
        if ((mb_strlen($base_time) > 14)) {
            throw new \InvalidArgumentException('invalid length for $base_time when calling TransferStatusResponse., must be smaller than or equal to 14.');
        }
        if ((mb_strlen($base_time) < 14)) {
            throw new \InvalidArgumentException('invalid length for $base_time when calling TransferStatusResponse., must be bigger than or equal to 14.');
        }

        $this->container['base_time'] = $base_time;

        return $this;
    }

    /**
     * Gets count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param string $count 明細取得件数 半角数字 振込明細の件数
     *
     * @return $this
     */
    public function setCount($count)
    {
        if ((mb_strlen($count) > 7)) {
            throw new \InvalidArgumentException('invalid length for $count when calling TransferStatusResponse., must be smaller than or equal to 7.');
        }
        if ((mb_strlen($count) < 1)) {
            throw new \InvalidArgumentException('invalid length for $count when calling TransferStatusResponse., must be bigger than or equal to 1.');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets transfer_query_bulk_responses
     *
     * @return \Ganb\Corporate\Client\Model\TransferQueryBulkResponse[]
     */
    public function getTransferQueryBulkResponses()
    {
        return $this->container['transfer_query_bulk_responses'];
    }

    /**
     * Sets transfer_query_bulk_responses
     *
     * @param \Ganb\Corporate\Client\Model\TransferQueryBulkResponse[] $transfer_query_bulk_responses 振込一括照会対象指定レスポンス 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setTransferQueryBulkResponses($transfer_query_bulk_responses)
    {
        $this->container['transfer_query_bulk_responses'] = $transfer_query_bulk_responses;

        return $this;
    }

    /**
     * Gets transfer_details
     *
     * @return \Ganb\Corporate\Client\Model\TransferDetail[]
     */
    public function getTransferDetails()
    {
        return $this->container['transfer_details'];
    }

    /**
     * Sets transfer_details
     *
     * @param \Ganb\Corporate\Client\Model\TransferDetail[] $transfer_details 振込照会明細情報 振込照会明細情報のリスト 該当する情報が無い場合は空のリストを返却
     *
     * @return $this
     */
    public function setTransferDetails($transfer_details)
    {
        $this->container['transfer_details'] = $transfer_details;

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


