<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Fauzan Caren.
 * User: OBI-WEB
 * Ver: v5.0.0
 * Date: 05/19/2021
 * To change this template use File | Settings | File Templates.
 */

class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function login($username, $password)
	{
		$user = str_replace("'", "''", $username);
		$pass = $this->EncryptedPassword(str_replace("'", "''", $password));
		$query = $this->db->query("SELECT * FROM TblMsEmployee as b 
                                   left join TblMsWorkplace as c on b.MsWorkplaceId=c.MsWorkplaceId
                                   left join TblMsEmployeePosition as d on d.MsEmpPositionId=b.MsEmpPositionId
                                   where MsEmpCode='" . $user . "' and MsEmpPass='" . $pass . "' and MsEmpIsActive='1'");
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function check_user($username)
	{
		$user = str_replace("'", "''", $username);
		$query = $this->db->query("SELECT * FROM TblMsEmployee where MsEmpCode='" . $username . "'");
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	function loginUser($gmail)
	{
		$gmailToken = str_replace("'", "''", $gmail);
		$query = $this->db->query("SELECT * FROM TblMsCustomer 
                                   where MsCustomerEmail='" . $gmailToken . "'");
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	function check_gmail($gmail)
	{
		$user = str_replace("'", "''", $gmail);
		$query = $this->db->query("SELECT * FROM TblMsCustomer where MsCustomerEmail='" . $gmail . "'");
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	function EncryptedPassword($pass)
	{
		$str1 = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890?!@#$%^&*()_+|;:,'.-`~";
		$str2 = "?!@#$%^&*()_+|;:,'.-`~1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
		$DecryptedText = "";
		for ($x = 1; $x <= strlen($pass); $x++) {

			$ori = substr($pass, $x - 1, 1);
			$lngPos  = strpos($str1, $ori);
			$DecryptedChr = substr($str2, $lngPos, 1);

			//echo substr($pass, $x, 1)."<br>";
			if ($lngPos > 0) {
				$DecryptedText = $DecryptedText . $DecryptedChr;
			} else {
				$DecryptedText = substr($pass, $x, 1);
			}
		}
		return $DecryptedText;
	}
	function DecryptedPassword($pass)
	{
		$str2 = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890?!@#$%^&*()_+|;:,'.-`~";
		$str1 = "?!@#$%^&*()_+|;:,'.-`~1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
		$DecryptedText = "";
		for ($x = 1; $x <= strlen($pass); $x++) {

			$ori = substr($pass, $x - 1, 1);
			$lngPos  = strpos($str1, $ori);
			$DecryptedChr = substr($str2, $lngPos, 1);

			//echo substr($pass, $x, 1)."<br>";
			if ($lngPos > 0) {
				$DecryptedText = $DecryptedText . $DecryptedChr;
			} else {
				$DecryptedText = substr($pass, $x, 1);
			}
		}
		return $DecryptedText;
	}
}