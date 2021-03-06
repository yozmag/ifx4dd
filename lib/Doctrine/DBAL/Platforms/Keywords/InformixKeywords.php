<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\DBAL\Platforms\Keywords;

/**
 * Informix Keywords.
 *
 * @author Jose M. Alonso M.  <josemalonsom@yahoo.es>
 * @link   www.doctrine-project.org
 */
class InformixKeywords extends KeywordList
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Informix';
    }

    /**
     * {@inheritdoc}
     *
     * Some keywords are omitted for convenience:
     *
     * - TEST
     * - The patterns IFX* and SYS*.
     * - The one character keywords (i.e. G, M, ...)
     *
     * @link http://www-01.ibm.com/support/knowledgecenter/SSGU8G_11.50.0/com.ibm.sqls.doc/ids_sqs_1951.htm
     * @link http://www-01.ibm.com/support/knowledgecenter/SSGU8G_11.70.0/com.ibm.sqls.doc/ids_sqs_1818.htm
     * @link http://www-01.ibm.com/support/knowledgecenter/SSGU8G_12.1.0/com.ibm.sqls.doc/ids_sqs_1818.htm
     */
    protected function getKeywords()
    {
        return array(
            'AAO',
            'ABS',
            'ABSOLUTE',
            'ACCESS',
            'ACCESS_METHOD',
            'ACCOUNT',
            'ACOS',
            'ACOSH',
            'ACTIVE',
            'ADD',
            'ADD_MONTHS',
            'ADDRESS',
            'ADMIN',
            'AFTER',
            'AGGREGATE',
            'ALIGNMENT',
            'ALL',
            'ALLOCATE',
            'ALL_ROWS',
            'ALTER',
            'AND',
            'ANSI',
            'ANY',
            'APPEND',
            'ARRAY',
            'AS',
            'ASC',
            'ASCII',
            'ASIN',
            'ASINH',
            'ASYNC',
            'AT',
            'ATAN',
            'ATAN2',
            'ATANH',
            'ATTACH',
            'ATTRIBUTES',
            'AUDIT',
            'AUTHENTICATION',
            'AUTHID',
            'AUTHORIZATION',
            'AUTHORIZED',
            'AUTO',
            'AUTOFREE',
            'AUTO_READAHEAD',
            'AUTO_REPREPARE',
            'AUTO_STAT_MODE',
            'AVG',
            'AVOID_EXECUTE',
            'AVOID_FACT',
            'AVOID_FULL',
            'AVOID_HASH',
            'AVOID_INDEX',
            'AVOID_INDEX_SJ',
            'AVOID_MULTI_INDEX',
            'AVOID_NL',
            'AVOID_STAR_JOIN',
            'AVOID_SUBQF',
            'BARGROUP',
            'BASED',
            'BEFORE',
            'BEGIN',
            'BETWEEN',
            'BIGINT',
            'BIGSERIAL',
            'BINARY',
            'BITAND',
            'BITANDNOT',
            'BITNOT',
            'BITOR',
            'BITXOR',
            'BLOB',
            'BLOBDIR',
            'BOOLEAN',
            'BOTH',
            'BOUND_IMPL_PDQ',
            'BUCKETS',
            'BUFFERED',
            'BUILTIN',
            'BY',
            'BYTE',
            'CACHE',
            'CALL',
            'CANNOTHASH',
            'CARDINALITY',
            'CASCADE',
            'CASE',
            'CAST',
            'CEIL',
            'CHAR',
            'CHARACTER',
            'CHARACTER_LENGTH',
            'CHARINDEX',
            'CHAR_LENGTH',
            'CHECK',
            'CHR',
            'CLASS',
            'CLASS_ORIGIN',
            'CLIENT',
            'CLOB',
            'CLOBDIR',
            'CLOSE',
            'CLUSTER',
            'CLUSTERSIZE',
            'CLUSTER_TXN_SCOPE',
            'COBOL',
            'CODESET',
            'COLLATION',
            'COLLECTION',
            'COLUMN',
            'COLUMNS',
            'COMMIT',
            'COMMITTED',
            'COMMUTATOR',
            'COMPONENT',
            'COMPONENTS',
            'COMPRESSED',
            'CONCAT',
            'CONCURRENT',
            'CONNECT',
            'CONNECT_BY_ISCYCLE',
            'CONNECT_BY_ISLEAF',
            'CONNECT_BY_ROOT',
            'CONNECT_BY_ROOTCONST',
            'CONNECTION',
            'CONNECTION_NAME',
            'CONST',
            'CONSTRAINT',
            'CONSTRAINTS',
            'CONSTRUCTOR',
            'CONTEXT',
            'CONTINUE',
            'COPY',
            'COS',
            'COSH',
            'COSTFUNC',
            'COUNT',
            'CRCOLS',
            'CREATE',
            'CROSS',
            'CUME_DIST',
            'CURRENT',
            'CURRENT_ROLE',
            'CURRENT_USER',
            'CURRVAL',
            'CURSOR',
            'CYCLE',
            'DATA',
            'DATABASE',
            'DATAFILES',
            'DATASKIP',
            'DATE',
            'DATETIME',
            'DAY',
            'DBA',
            'DBDATE',
            'DBINFO',
            'DBPASSWORD',
            'DBSA',
            'DBSECADM',
            'DBSERVERNAME',
            'DBSSO',
            'DEALLOCATE',
            'DEBUG',
            'DEBUG_ENV',
            'DEBUGMODE',
            'DEC',
            'DECIMAL',
            'DECLARE',
            'DECODE',
            'DECRYPT_BINARY',
            'DECRYPT_CHAR',
            'DEC_T',
            'DEFAULT',
            'DEFAULTESCCHAR',
            'DEFAULT_ROLE',
            'DEFAULT_USER',
            'DEFERRED',
            'DEFERRED_PREPARE',
            'DEFINE',
            'DEGREES',
            'DELAY',
            'DELETE',
            'DELETING',
            'DELIMITED',
            'DELIMITER',
            'DELUXE',
            'DENSERANK',
            'DENSE_RANK',
            'DESC',
            'DESCRIBE',
            'DESCRIPTOR',
            'DETACH',
            'DIAGNOSTICS',
            'DIRECTIVES',
            'DIRTY',
            'DISABLE',
            'DISABLED',
            'DISCARD',
            'DISCONNECT',
            'DISK',
            'DISTINCT',
            'DISTRIBUTEBINARY',
            'DISTRIBUTESREFERENCES',
            'DISTRIBUTIONS',
            'DOCUMENT',
            'DOMAIN',
            'DONOTDISTRIBUTE',
            'DORMANT',
            'DOUBLE',
            'DROP',
            'DTIME_T',
            'EACH',
            'ELIF',
            'ELSE',
            'ENABLE',
            'ENABLED',
            'ENCRYPT_AES',
            'ENCRYPTION',
            'ENCRYPT_TDES',
            'END',
            'ENUM',
            'ENVIRONMENT',
            'ERKEY',
            'ERROR',
            'ESCAPE',
            'EXCEPT',
            'EXCEPTION',
            'EXCLUSIVE',
            'EXEC',
            'EXECUTE',
            'EXECUTEANYWHERE',
            'EXEMPTION',
            'EXISTS',
            'EXIT',
            'EXP',
            'EXPLAIN',
            'EXPLICIT',
            'EXPRESS',
            'EXPRESSION',
            'EXTDIRECTIVES',
            'EXTEND',
            'EXTENT',
            'EXTERNAL',
            'EXTYPEID',
            'EXTYPELENGTH',
            'EXTYPENAME',
            'EXTYPEOWNERLENGTH',
            'EXTYPEOWNERNAME',
            'FACT',
            'FALSE',
            'FAR',
            'FETCH',
            'FILE',
            'FILETOBLOB',
            'FILETOCLOB',
            'FILLFACTOR',
            'FILTERING',
            'FINAL',
            'FIRST',
            'FIRST_ROWS',
            'FIRST_VALUE',
            'FIXCHAR',
            'FIXED',
            'FLOAT',
            'FLOOR',
            'FLUSH',
            'FOLLOWING',
            'FOR',
            'FORCE',
            'FORCED',
            'FORCE_DDL_EXEC',
            'FOREACH',
            'FOREIGN',
            'FORMAT',
            'FORMAT_UNITS',
            'FORTRAN',
            'FOUND',
            'FRACTION',
            'FRAGMENT',
            'FRAGMENTS',
            'FREE',
            'FROM',
            'FULL',
            'FUNCTION',
            'GB',
            'GENERAL',
            'GET',
            'GETHINT',
            'GIB',
            'GLOBAL',
            'GO',
            'GOTO',
            'GRANT',
            'GREATERTHAN',
            'GREATERTHANOREQUAL',
            'GRID',
            'GRID_NODE_SKIP',
            'GROUP',
            'HANDLESNULLS',
            'HASH',
            'HAVING',
            'HDR',
            'HDR_TXN_SCOPE',
            'HEX',
            'HIGH',
            'HINT',
            'HOLD',
            'HOME',
            'HOUR',
            'IDATA',
            'IDSLBACREADARRAY',
            'IDSLBACREADSET',
            'IDSLBACREADTREE',
            'IDSLBACRULES',
            'IDSLBACWRITEARRAY',
            'IDSLBACWRITESET',
            'IDSLBACWRITETREE',
            'IDSSECURITYLABEL',
            'IF',
            'IFX_AUTO_REPREPARE',
            'IFX_BATCHEDREAD_TABLE',
            'IFX_INT8_T',
            'IFX_LO_CREATE_SPEC_T',
            'IFX_LO_STAT_T',
            'ILENGTH',
            'IMMEDIATE',
            'IMPLICIT',
            'IMPLICIT_PDQ',
            'IN',
            'INACTIVE',
            'INCREMENT',
            'INDEX',
            'INDEX_ALL',
            'INDEXES',
            'INDEX_SJ',
            'INDICATOR',
            'INFORMIX',
            'INFORMIXCONRETRY',
            'INFORMIXCONTIME',
            'INIT',
            'INITCAP',
            'INLINE',
            'INNER',
            'INOUT',
            'INSENSITIVE',
            'INSERT',
            'INSERTING',
            'INSTEAD',
            'INSTR',
            'INT',
            'INT8',
            'INTEG',
            'INTEGER',
            'INTERNAL',
            'INTERNALLENGTH',
            'INTERSECT',
            'INTERVAL',
            'INTO',
            'INTRVL_T',
            'IS',
            'ISCANONICAL',
            'ISOLATION',
            'ITEM',
            'ITERATOR',
            'ITYPE',
            'JAVA',
            'JOIN',
            'KB',
            'KEEP',
            'KEY',
            'KIB',
            'LABEL',
            'LABELEQ',
            'LABELGE',
            'LABELGLB',
            'LABELGT',
            'LABELLE',
            'LABELLT',
            'LABELLUB',
            'LABELTOSTRING',
            'LAG',
            'LANGUAGE',
            'LAST',
            'LAST_DAY',
            'LAST_VALUE',
            'LATERAL',
            'LEAD',
            'LEADING',
            'LEFT',
            'LEN',
            'LENGTH',
            'LESSTHAN',
            'LESSTHANOREQUAL',
            'LET',
            'LEVEL',
            'LIKE',
            'LIMIT',
            'LIST',
            'LISTING',
            'LOAD',
            'LOCAL',
            'LOCATOR',
            'LOCK',
            'LOCKS',
            'LOCOPY',
            'LOC_T',
            'LOG',
            'LOG10',
            'LOGN',
            'LONG',
            'LOOP',
            'LOTOFILE',
            'LOW',
            'LOWER',
            'LPAD',
            'LTRIM',
            'LVARCHAR',
            'MATCHED',
            'MATCHES',
            'MAX',
            'MAXERRORS',
            'MAXLEN',
            'MAXVALUE',
            'MB',
            'MDY',
            'MEDIAN',
            'MEDIUM',
            'MEMORY',
            'MEMORY_RESIDENT',
            'MERGE',
            'MESSAGE_LENGTH',
            'MESSAGE_TEXT',
            'MIB',
            'MIDDLE',
            'MIN',
            'MINUS',
            'MINUTE',
            'MINVALUE',
            'MOD',
            'MODE',
            'MODERATE',
            'MODIFY',
            'MODULE',
            'MONEY',
            'MONTH',
            'MONTHS_BETWEEN',
            'MORE',
            'MOUNTING',
            'MULTI_INDEX',
            'MULTISET',
            'NAME',
            'NCHAR',
            'NEAR_SYNC',
            'NEGATOR',
            'NEW',
            'NEXT',
            'NEXT_DAY',
            'NEXTVAL',
            'NLSCASE',
            'NO',
            'NOCACHE',
            'NOCYCLE',
            'NOMAXVALUE',
            'NOMIGRATE',
            'NOMINVALUE',
            'NON_DIM',
            'NONE',
            'NON_RESIDENT',
            'NOORDER',
            'NORMAL',
            'NOT',
            'NOTEMPLATEARG',
            'NOTEQUAL',
            'NOTEQUAL|',
            'NOVALIDATE',
            'NTILE',
            'NULL',
            'NULLABLE',
            'NULLIF',
            'NULLS',
            'NUMBER',
            'NUMERIC',
            'NUMROWS',
            'NUMTODSINTERVAL',
            'NUMTOYMINTERVAL',
            'NVARCHAR',
            'NVL',
            'OCTET_LENGTH',
            'OF',
            'OFF',
            'OLD',
            'ON',
            'ONLINE',
            'ONLY',
            'OPAQUE',
            'OPCLASS',
            'OPEN',
            'OPTCOMPIND',
            'OPTICAL',
            'OPTIMIZATION',
            'OPTION',
            'OR',
            'ORDER',
            'ORDERED',
            'OUT',
            'OUTER',
            'OUTPUT',
            'OVER',
            'OVERRIDE',
            'PAGE',
            'PARALLELIZABLE',
            'PARAMETER',
            'PARTITION',
            'PASCAL',
            'PASSEDBYVALUE',
            'PASSWORD',
            'PDQPRIORITY',
            'PERCALL_COST',
            'PERCENT_RANK',
            'PIPE',
            'PLI',
            'PLOAD',
            'POLICY',
            'POW',
            'POWER',
            'PRECEDING',
            'PRECISION',
            'PREPARE',
            'PREVIOUS',
            'PRIMARY',
            'PRIOR',
            'PRIVATE',
            'PRIVILEGES',
            'PROCEDURE',
            'PROPERTIES',
            'PUBLIC',
            'PUT',
            'RADIANS',
            'RAISE',
            'RANGE',
            'RANK',
            'RATIOTOREPORT',
            'RATIO_TO_REPORT',
            'RAW',
            'READ',
            'REAL',
            'RECORDEND',
            'REFERENCES',
            'REFERENCING',
            'REGISTER',
            'REJECTFILE',
            'RELATIVE',
            'RELEASE',
            'REMAINDER',
            'RENAME',
            'REOPTIMIZATION',
            'REPEATABLE',
            'REPLACE',
            'REPLICATION',
            'RESERVE',
            'RESOLUTION',
            'RESOURCE',
            'RESTART',
            'RESTRICT',
            'RESUME',
            'RETAIN',
            'RETAINUPDATELOCKS',
            'RETURN',
            'RETURNED_SQLSTATE',
            'RETURNING',
            'RETURNS',
            'REUSE',
            'REVERSE',
            'REVOKE',
            'RIGHT',
            'ROBIN',
            'ROLE',
            'ROLLBACK',
            'ROLLFORWARD',
            'ROLLING',
            'ROOT',
            'ROUND',
            'ROUTINE',
            'ROW',
            'ROW_COUNT',
            'ROWID',
            'ROWIDS',
            'ROWNUMBER',
            'ROW_NUMBER',
            'ROWS',
            'RPAD',
            'RTRIM',
            'RULE',
            'SAMEAS',
            'SAMPLES',
            'SAMPLING',
            'SAVE',
            'SAVEPOINT',
            'SCALE',
            'SCHEMA',
            'SCROLL',
            'SECLABEL_BY_COMP',
            'SECLABEL_BY_NAME',
            'SECLABEL_TO_CHAR',
            'SECOND',
            'SECONDARY',
            'SECTION',
            'SECURED',
            'SECURITY',
            'SELCONST',
            'SELECT',
            'SELECT_GRID',
            'SELECT_GRID_ALL',
            'SELECTING',
            'SELFUNC',
            'SELFUNCARGS',
            'SENSITIVE',
            'SEQUENCE',
            'SERIAL',
            'SERIAL8',
            'SERIALIZABLE',
            'SERVER',
            'SERVER_NAME',
            'SERVERUUID',
            'SESSION',
            'SET',
            'SETSESSIONAUTH',
            'SHARE',
            'SHORT',
            'SIBLINGS',
            'SIGNED',
            'SIN',
            'SITENAME',
            'SIZE',
            'SKALL',
            'SKINHIBIT',
            'SKIP',
            'SKSHOW',
            'SMALLFLOAT',
            'SMALLINT',
            'SOME',
            'SOURCEID',
            'SOURCETYPE',
            'SPACE',
            'SPECIFIC',
            'SQL',
            'SQLCODE',
            'SQLCONTEXT',
            'SQLERROR',
            'SQLSTATE',
            'SQLWARNING',
            'SQRT',
            'STABILITY',
            'STACK',
            'STANDARD',
            'STAR_JOIN',
            'START',
            'STATCHANGE',
            'STATEMENT',
            'STATIC',
            'STATISTICS',
            'STATLEVEL',
            'STATUS',
            'STDEV',
            'STEP',
            'STOP',
            'STORAGE',
            'STORE',
            'STRATEGIES',
            'STRING',
            'STRINGTOLABEL',
            'STRUCT',
            'STYLE',
            'SUBCLASS_ORIGIN',
            'SUBSTR',
            'SUBSTRING',
            'SUBSTRING_INDEX',
            'SUM',
            'SUPPORT',
            'SYNC',
            'SYNONYM',
            'SYS_CONNECT_BY_PATH',
            'SYSDATE',
            'SYSDBCLOSE',
            'SYSDBOPEN',
            'SYSTEM',
            'TABLE',
            'TABLES',
            'TAN',
            'TASK',
            'TB',
            'TEMP',
            'TEMPLATE',
            'TEXT',
            'THEN',
            'TIB',
            'TIME',
            'TIMEOUT',
            'TO',
            'TO_CHAR',
            'TO_DATE',
            'TODAY',
            'TO_DSINTERVAL',
            'TO_NUMBER',
            'TO_YMINTERVAL',
            'TRACE',
            'TRAILING',
            'TRANSACTION',
            'TRANSITION',
            'TREE',
            'TRIGGER',
            'TRIGGERS',
            'TRIM',
            'TRUE',
            'TRUNC',
            'TRUNCATE',
            'TRUSTED',
            'TYPE',
            'TYPEDEF',
            'TYPEID',
            'TYPENAME',
            'TYPEOF',
            'UID',
            'UNBOUNDED',
            'UNCOMMITTED',
            'UNDER',
            'UNION',
            'UNIQUE',
            'UNITS',
            'UNKNOWN',
            'UNLOAD',
            'UNLOCK',
            'UNSIGNED',
            'UPDATE',
            'UPDATING',
            'UPON',
            'UPPER',
            'USAGE',
            'USE',
            'USE_HASH',
            'USELASTCOMMITTED',
            'USE_NL',
            'USER',
            'USE_SUBQF',
            'USING',
            'USTLOW_SAMPLE',
            'VALUE',
            'VALUES',
            'VAR',
            'VARCHAR',
            'VARIABLE',
            'VARIANCE',
            'VARIANT',
            'VARYING',
            'VERCOLS',
            'VIEW',
            'VIOLATIONS',
            'VOID',
            'VOLATILE',
            'WAIT',
            'WARNING',
            'WEEKDAY',
            'WHEN',
            'WHENEVER',
            'WHERE',
            'WHILE',
            'WITH',
            'WITHOUT',
            'WORK',
            'WRITE',
            'WRITEDOWN',
            'WRITEUP',
            'XADATASOURCE',
            'XID',
            'XLOAD',
            'XUNLOAD',
            'YEAR'
        );
    }
}
