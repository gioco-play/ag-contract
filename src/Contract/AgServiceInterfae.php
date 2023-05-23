<?php
declare(strict_types=1);
namespace GiocoPlus\AG\Contract;
/**
 * 交易
 */
interface AgServiceInterfae {
    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $odd_type
     * @param string $bakUrl
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $odd_type, string $bakUrl = "");

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 上/下分失敗 訂單檢核
     *
     * @param string $op_code
     * @param string $order_no
     * @return mixed
     */
    function orderFailCheck(string $op_code, string $order_no);

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $op_code
     * @param array $vendor
     * @param string $member_code
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $member_code);

    /**
     * 遊戲商帳號轉換為營商帳號
     * @param string $op_code
     * @param array $vendor
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $op_code, array $vendor, string $vendor_account);

}