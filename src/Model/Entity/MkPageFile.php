<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MkPageFile Entity
 *
 * @property int $id
 * @property string $id_page
 * @property string|null $page_nm
 * @property string|null $url
 * @property string $file_nm
 * @property int|null $sort
 * @property string|null $del_flg
 *
 * @property \App\Model\Entity\MkAuthFile[] $mk_auth_files
 * @property \App\Model\Entity\MkMenueFile[] $mk_menue_files
 */
class MkPageFile extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_page' => true,
        'page_nm' => true,
        'url' => true,
        'file_nm' => true,
        'sort' => true,
        'del_flg' => true,
        'mk_auth_files' => true,
        'mk_menue_files' => true
    ];
}
