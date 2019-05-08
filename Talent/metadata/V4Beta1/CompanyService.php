<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/company_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class CompanyService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Company::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae30f0a31676f6f676c652f636c6f75642f74616c656e742f7634626574" .
            "61312f636f6d70616e795f736572766963652e70726f746f121b676f6f67" .
            "6c652e636c6f75642e74616c656e742e763462657461311a28676f6f676c" .
            "652f636c6f75642f74616c656e742f763462657461312f636f6d6d6f6e2e" .
            "70726f746f1a29676f6f676c652f636c6f75642f74616c656e742f763462" .
            "657461312f636f6d70616e792e70726f746f1a1b676f6f676c652f70726f" .
            "746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f74" .
            "6f6275662f6669656c645f6d61736b2e70726f746f225d0a144372656174" .
            "65436f6d70616e7952657175657374120e0a06706172656e741801200128" .
            "0912350a07636f6d70616e7918022001280b32242e676f6f676c652e636c" .
            "6f75642e74616c656e742e763462657461312e436f6d70616e7922210a11" .
            "476574436f6d70616e7952657175657374120c0a046e616d651801200128" .
            "09227e0a14557064617465436f6d70616e795265717565737412350a0763" .
            "6f6d70616e7918012001280b32242e676f6f676c652e636c6f75642e7461" .
            "6c656e742e763462657461312e436f6d70616e79122f0a0b757064617465" .
            "5f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e" .
            "4669656c644d61736b22240a1444656c657465436f6d70616e7952657175" .
            "657374120c0a046e616d6518012001280922680a144c697374436f6d7061" .
            "6e69657352657175657374120e0a06706172656e7418012001280912120a" .
            "0a706167655f746f6b656e18022001280912110a09706167655f73697a65" .
            "18032001280512190a11726571756972655f6f70656e5f6a6f6273180420" .
            "01280822aa010a154c697374436f6d70616e696573526573706f6e736512" .
            "370a09636f6d70616e69657318012003280b32242e676f6f676c652e636c" .
            "6f75642e74616c656e742e763462657461312e436f6d70616e7912170a0f" .
            "6e6578745f706167655f746f6b656e180220012809123f0a086d65746164" .
            "61746118032001280b322d2e676f6f676c652e636c6f75642e74616c656e" .
            "742e763462657461312e526573706f6e73654d6574616461746132b1080a" .
            "0e436f6d70616e795365727669636512d2010a0d437265617465436f6d70" .
            "616e7912312e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e437265617465436f6d70616e79526571756573741a242e676f6f" .
            "676c652e636c6f75642e74616c656e742e763462657461312e436f6d7061" .
            "6e79226882d3e493026222302f763462657461312f7b706172656e743d70" .
            "726f6a656374732f2a2f74656e616e74732f2a7d2f636f6d70616e696573" .
            "3a012a5a2b22262f763462657461312f7b706172656e743d70726f6a6563" .
            "74732f2a7d2f636f6d70616e6965733a012a12c6010a0a476574436f6d70" .
            "616e79122e2e676f6f676c652e636c6f75642e74616c656e742e76346265" .
            "7461312e476574436f6d70616e79526571756573741a242e676f6f676c65" .
            "2e636c6f75642e74616c656e742e763462657461312e436f6d70616e7922" .
            "6282d3e493025c12302f763462657461312f7b6e616d653d70726f6a6563" .
            "74732f2a2f74656e616e74732f2a2f636f6d70616e6965732f2a7d5a2812" .
            "262f763462657461312f7b6e616d653d70726f6a656374732f2a2f636f6d" .
            "70616e6965732f2a7d12e2010a0d557064617465436f6d70616e7912312e" .
            "676f6f676c652e636c6f75642e74616c656e742e763462657461312e5570" .
            "64617465436f6d70616e79526571756573741a242e676f6f676c652e636c" .
            "6f75642e74616c656e742e763462657461312e436f6d70616e79227882d3" .
            "e493027232382f763462657461312f7b636f6d70616e792e6e616d653d70" .
            "726f6a656374732f2a2f74656e616e74732f2a2f636f6d70616e6965732f" .
            "2a7d3a012a5a33322e2f763462657461312f7b636f6d70616e792e6e616d" .
            "653d70726f6a656374732f2a2f636f6d70616e6965732f2a7d3a012a12be" .
            "010a0d44656c657465436f6d70616e7912312e676f6f676c652e636c6f75" .
            "642e74616c656e742e763462657461312e44656c657465436f6d70616e79" .
            "526571756573741a162e676f6f676c652e70726f746f6275662e456d7074" .
            "79226282d3e493025c2a302f763462657461312f7b6e616d653d70726f6a" .
            "656374732f2a2f74656e616e74732f2a2f636f6d70616e6965732f2a7d5a" .
            "282a262f763462657461312f7b6e616d653d70726f6a656374732f2a2f63" .
            "6f6d70616e6965732f2a7d12da010a0d4c697374436f6d70616e69657312" .
            "312e676f6f676c652e636c6f75642e74616c656e742e763462657461312e" .
            "4c697374436f6d70616e696573526571756573741a322e676f6f676c652e" .
            "636c6f75642e74616c656e742e763462657461312e4c697374436f6d7061" .
            "6e696573526573706f6e7365226282d3e493025c12302f76346265746131" .
            "2f7b706172656e743d70726f6a656374732f2a2f74656e616e74732f2a7d" .
            "2f636f6d70616e6965735a2812262f763462657461312f7b706172656e74" .
            "3d70726f6a656374732f2a7d2f636f6d70616e6965734281010a1f636f6d" .
            "2e676f6f676c652e636c6f75642e74616c656e742e763462657461314213" .
            "436f6d70616e795365727669636550726f746f50015a41676f6f676c652e" .
            "676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561706973" .
            "2f636c6f75642f74616c656e742f763462657461313b74616c656e74a202" .
            "03435453620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
