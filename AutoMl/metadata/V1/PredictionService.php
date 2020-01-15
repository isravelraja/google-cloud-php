<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/prediction_service.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class PredictionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\AnnotationPayload::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\DataItems::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Operations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ace0e0a2f676f6f676c652f636c6f75642f6175746f6d6c2f76312f7072" .
            "6564696374696f6e5f736572766963652e70726f746f1216676f6f676c65" .
            "2e636c6f75642e6175746f6d6c2e76311a17676f6f676c652f6170692f63" .
            "6c69656e742e70726f746f1a19676f6f676c652f6170692f7265736f7572" .
            "63652e70726f746f1a2f676f6f676c652f636c6f75642f6175746f6d6c2f" .
            "76312f616e6e6f746174696f6e5f7061796c6f61642e70726f746f1a2767" .
            "6f6f676c652f636c6f75642f6175746f6d6c2f76312f646174615f697465" .
            "6d732e70726f746f1a1f676f6f676c652f636c6f75642f6175746f6d6c2f" .
            "76312f696f2e70726f746f1a27676f6f676c652f636c6f75642f6175746f" .
            "6d6c2f76312f6f7065726174696f6e732e70726f746f1a23676f6f676c65" .
            "2f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f22" .
            "ca010a0e5072656469637452657175657374120c0a046e616d6518012001" .
            "280912370a077061796c6f616418022001280b32262e676f6f676c652e63" .
            "6c6f75642e6175746f6d6c2e76312e4578616d706c655061796c6f616412" .
            "420a06706172616d7318032003280b32322e676f6f676c652e636c6f7564" .
            "2e6175746f6d6c2e76312e50726564696374526571756573742e50617261" .
            "6d73456e7472791a2d0a0b506172616d73456e747279120b0a036b657918" .
            "0120012809120d0a0576616c75651802200128093a023801228b020a0f50" .
            "726564696374526573706f6e7365123a0a077061796c6f61641801200328" .
            "0b32292e676f6f676c652e636c6f75642e6175746f6d6c2e76312e416e6e" .
            "6f746174696f6e5061796c6f616412420a1270726570726f636573736564" .
            "5f696e70757418032001280b32262e676f6f676c652e636c6f75642e6175" .
            "746f6d6c2e76312e4578616d706c655061796c6f616412470a086d657461" .
            "6461746118022003280b32352e676f6f676c652e636c6f75642e6175746f" .
            "6d6c2e76312e50726564696374526573706f6e73652e4d65746164617461" .
            "456e7472791a2f0a0d4d65746164617461456e747279120b0a036b657918" .
            "0120012809120d0a0576616c75651802200128093a02380122ab020a1342" .
            "617463685072656469637452657175657374120c0a046e616d6518012001" .
            "280912450a0c696e7075745f636f6e66696718032001280b322f2e676f6f" .
            "676c652e636c6f75642e6175746f6d6c2e76312e42617463685072656469" .
            "6374496e707574436f6e66696712470a0d6f75747075745f636f6e666967" .
            "18042001280b32302e676f6f676c652e636c6f75642e6175746f6d6c2e76" .
            "312e4261746368507265646963744f7574707574436f6e66696712470a06" .
            "706172616d7318052003280b32372e676f6f676c652e636c6f75642e6175" .
            "746f6d6c2e76312e426174636850726564696374526571756573742e5061" .
            "72616d73456e7472791a2d0a0b506172616d73456e747279120b0a036b65" .
            "79180120012809120d0a0576616c75651802200128093a0238012291010a" .
            "12426174636850726564696374526573756c74124a0a086d657461646174" .
            "6118012003280b32382e676f6f676c652e636c6f75642e6175746f6d6c2e" .
            "76312e426174636850726564696374526573756c742e4d65746164617461" .
            "456e7472791a2f0a0d4d65746164617461456e747279120b0a036b657918" .
            "0120012809120d0a0576616c75651802200128093a023801329b030a1150" .
            "726564696374696f6e536572766963651299010a07507265646963741226" .
            "2e676f6f676c652e636c6f75642e6175746f6d6c2e76312e507265646963" .
            "74526571756573741a272e676f6f676c652e636c6f75642e6175746f6d6c" .
            "2e76312e50726564696374526573706f6e7365223d82d3e493023722322f" .
            "76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f" .
            "2a2f6d6f64656c732f2a7d3a707265646963743a012a129e010a0c426174" .
            "636850726564696374122b2e676f6f676c652e636c6f75642e6175746f6d" .
            "6c2e76312e426174636850726564696374526571756573741a1d2e676f6f" .
            "676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e224282d3e4" .
            "93023c22372f76312f7b6e616d653d70726f6a656374732f2a2f6c6f6361" .
            "74696f6e732f2a2f6d6f64656c732f2a7d3a626174636850726564696374" .
            "3a012a1a49ca41156175746f6d6c2e676f6f676c65617069732e636f6dd2" .
            "412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f61" .
            "7574682f636c6f75642d706c6174666f726d42c2010a1a636f6d2e676f6f" .
            "676c652e636c6f75642e6175746f6d6c2e7631421650726564696374696f" .
            "6e5365727669636550726f746f50015a3c676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f7564" .
            "2f6175746f6d6c2f76313b6175746f6d6caa0216476f6f676c652e436c6f" .
            "75642e4175746f4d4c2e5631ca0216476f6f676c655c436c6f75645c4175" .
            "746f4d6c5c5631ea0219476f6f676c653a3a436c6f75643a3a4175746f4d" .
            "4c3a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
