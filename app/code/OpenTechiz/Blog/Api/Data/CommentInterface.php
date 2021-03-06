<?php 
namespace OpenTechiz\Blog\Api\Data;
/**
* Blog Post Interface
* @api
*/
interface CommentInterface
{
	/**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const COMMENT_ID                  = 'comment_id';
    const CONTENT                  = 'content';
    const AUTHOR                    = 'author';
    const EMAIL						= "email";
    const POST_ID                  = 'post_id';
    const USER_ID				= 'user_id';
    const CREATION_TIME            = 'creation_time';
    const IS_ACTIVE					= 'is_active';

	function getID();

	function getContent();

	function getAuthor();

	function getEmail();

	function getPostID();

	function getUserID();

	function getCreationTime();

	function isActive();

	function setID($id);

	function setContent($content);

	function setAuthor($author);

	function setEmail($email);

	function setPostID($postID);

	function setUserID($userID);

	function setCreationTime($creatTime);

	function setIsActive($isactive);

}