<?php
namespace Customize\Entity;
use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{
    // membershipRoute

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "入会ルート",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $membershipRoute;

    /**
     * @return string|null
     */
    public function getMembershipRoute()
    {
        return $this->membershipRoute;
    }

    /**
     * @param string|null $membershipRoute
     * @return CustomerTrait
     */
    public function setMembershipRoute($membershipRoute)
    {
        $this->membershipRoute = $membershipRoute;
        return $this;
    }


    // contractDate

    /**
     * @var date|null
     * @ORM\Column(type="date", nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\DateType",
     *     options={
     *          "required": false,
     *          "label": "契約日",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $contractDate;

    /**
     * @return date|null
     */
    public function getContractDate()
    {
        return $this->contractDate;
    }

    /**
     * @param date|null $contractDate
     * @return CustomerTrait
     */
    public function setContractDate($contractDate)
    {
        $this->contractDate = $contractDate;
        return $this;
    }
    

    // cancelDate

    /**
     * @var date|null
     * @ORM\Column(type="date", nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\DateType",
     *     options={
     *          "required": false,
     *          "label": "解約日",
     *          "attr": {"placeholder": ""}
     *     })
     */
    private $cancelDate;

    /**
     * @return date|null
     */
    public function getCancelDate()
    {
        return $this->cancelDate;
    }

    /**
     * @param date|null $cancelDate
     * @return CustomerTrait
     */
    public function setCancelDate($cancelDate)
    {
        $this->cancelDate = $cancelDate;
        return $this;
    }
}